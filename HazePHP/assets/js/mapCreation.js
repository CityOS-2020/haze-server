var genderList  = [];
var ageList = [];
var maleCounter = 0;
var graphDataGender = [];
var graphDataAge = [];
var teenCount = 0;
var youngAdultCount = 0;
var adultCount = 0;
var seniorCount = 0;

var createMarkers = function (data) {
    var cityOption = document.getElementById("city");
    var catEventOption = document.getElementById("eventCat");



    data.forEach(function (item) {

        if((item.cityName == cityOption.options[cityOption.selectedIndex].value) && (item.category == catEventOption.options[catEventOption.selectedIndex].value))
        {
                 
                 var map = new GMaps({
                                     div: '#gmap_marker44',
                                     lat: item.latitude,
                                     lng: item.longitude
                                     });
            map.addMarker({
                lat: item.latitude,
                lng: item.longitude,
                title: item.eventName,
                click: function (e) {
                    $('#extraInfo').show();
                    $.ajax({
                        method: "GET",
                        contentType: "application/json",
                        url: "http://localhost:8888/HazePHP/assets/api/nikola.php",
                    })
                    .done(function (data) {
                        createPies(data);

                    });
                }
            });
        }
        else
        {
            $('')
        }
    });

}

function createPies(data)
{
    data.forEach(function (item)
    {
        var genderValue = item.gender;
        if(genderValue == "male")
        {
            maleCounter++;
        }
        genderList.push(genderValue);
        var age = (item.birthday).split("/");
        ageList.push(2016 - parseInt(age[2]));
    });
    
    graphDataGender[0] =
    {
        label: "Male",
        data: (maleCounter/genderList.length)*100
    }

    graphDataGender[1] =
    {
        label: "Female",
        data: ((genderList.length - maleCounter)/genderList.length)*100
    }

    for(var i = 0; i < ageList.length; i++)
    {
        if(ageList[i]< 19)
        {
            teenCount++;
        }
        else if(ageList[i] < 26)
        {
            youngAdultCount++;
        }
        else if(ageList[i] < 51)
        {
            adultCount++;
        }
        else
        {
            seniorCount++;
        }
    }

    graphDataAge[0] =
    {
        label: "Teen",
        data: (teenCount/ageList.length)*100
    }

    graphDataAge[1] =
    {
        label: "Young Adult",
        data: (youngAdultCount/ageList.length)*100
    }

    graphDataAge[2] =
    {
        label: "Adult",
        data: (adultCount/ageList.length)*100
    }

    graphDataAge[3] =
    {
        label: "Senior",
        data: (seniorCount/ageList.length)*100
    }
    graphs(graphDataGender,graphDataAge);
}

function getEvents() {
    $.ajax({
            method: "GET",
            contentType: "application/json",
            url: "http://localhost:8888/HazePHP/assets/api/pero.php",
        })
        .done(function (data) {
            createMarkers(data);
        });
}

function graphs(graphDataGender, graphDataAge) {


    $.plot($("#graph_1"), graphDataGender, {
        series: {
            pie: {
                show: true,
                radius: 1,
                label: {
                    show: true,
                    radius: 1,
                    formatter: function (label, series) {
                        return '<div style="font-size:8pt;text-align:center;padding:2px;color:white;">' + label + '<br/>' + Math.round(series.percent) + '%</div>';
                    },
                    background: {
                        opacity: 0.8
                    }
                }
            }
        },
        legend: {
            show: false
        }
    });


    $.plot($("#graph_2"), graphDataAge, {
        series: {
            pie: {
                show: true,
                radius: 1,
                label: {
                    show: true,
                    radius: 3 / 4,
                    formatter: function (label, series) {
                        return '<div style="font-size:8pt;text-align:center;padding:2px;color:white;">' + label + '<br/>' + Math.round(series.percent) + '%</div>';
                    },
                    background: {
                        opacity: 0.5
                    }
                }
            }
        },
        legend: {
            show: false
        }
    });


}
