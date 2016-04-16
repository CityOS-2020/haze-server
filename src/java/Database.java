

import java.sql.SQLException;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Calendar;
import java.util.Properties;
import java.util.UUID;
import java.util.Vector;
/**
 *
 * @author mateosokac
 */
public class Database extends Constants
{
    /*
    Communication with Database which runs on localhost via sql workbench and AAMPS.
    There are still methods regarding token from project 3 but i decided to use only username 
    and password as authorization. 
    */
        
	private DatabaseHandler db;
	
	public Database() 
        {
		Properties connectionProps = new Properties();
		connectionProps.put("host", HOST);
		connectionProps.put("driver", DRIVER);
		connectionProps.put("dbName", NAME);
		connectionProps.put("port", PORT);
		connectionProps.put("user", USER);
		connectionProps.put("password", PASSWORD);
		
		
		db = new DatabaseHandler();
		
	}
	
	public boolean isValidUser(String username, String password) 
        {
            try 
            {
                ArrayList<ArrayList<String>> results = db.getData("SELECT * FROM users WHERE username=? AND password=?",
                        new ArrayList<String>(Arrays.asList(username,password)));

                if(results != null)
                {
                    System.out.println("----------------------"+results.get(0).get(0));
                    String id = results.get(0).get(0);
                    return true;
                }
                else
                    return false;
            }
            catch(Exception e)
            {
                e.printStackTrace();
            }
            return false;
        }
	
	public String createToken(String username, String password)
        {
            try 
            {
                ArrayList<ArrayList<String>> results = db.getData("select * from USERS");

                if(results != null)
                {
                    String token = generateRandomToken();
                    System.out.println("----------------------"+results.get(0).get(0));
                    String id = results.get(7).get(0);
                    String id2 = results.get(7).get(1);
                    String id3 = results.get(7).get(2);
                    String id4 = results.get(7).get(3);
                    System.out.println(id + id2 + id3 +id4);

                }
                else 
                {
                        return "username and passwrod do not exist in the database.";
                }
		} catch (SQLException e) {
			e.printStackTrace();
		}
           return null;
	}
        
	private boolean insertNewToken(String user_id, String token, String expires)
        {
            try
            {
                int response = db.updateDb("INSERT INTO tokens (user_id, token, expires) VALUES (?, ?, ?)",
                                new ArrayList<String>(Arrays.asList(user_id, token, expires)));
                if(response == 1)
                {
                    return true;
                }
            }
            catch(SQLException e)
            {
                e.printStackTrace();
            }
            return false;
        }
        
	private boolean putTokenInDb(String token, String userId)
        {
            try
            {
                int success = db.updateDb("UPDATE tokens SET token=? WHERE user_id=?;",
                                                new ArrayList<>(Arrays.asList(token,userId)));
                                if(success == 1)                            
                                    return true;                           
                                else 
                                    return false;
            }
            catch(SQLException e)
            {
                e.printStackTrace();
            }
            catch(Exception es)
            {
                es.printStackTrace();
            }
            return false;
        }
        
	private String generateRandomToken() 
        {
            UUID token = UUID.randomUUID();	
            return token.toString();
	}
        
	
	public boolean isValidToken(String token) throws Exception {
            try
            {
                ArrayList<ArrayList<String>> results = db.getData("SELECT id FROM tokens WHERE token=?", new ArrayList<String>(Arrays.asList(token)));
                if(results != null)
                {       
                     return true;
                }
                else
                    return false;
            }catch(SQLException e){e.printStackTrace();}catch(Exception es){es.printStackTrace();};
                return false;
	}
	
	
	private void deleteToken(String token) {
		
	}

	
	public String getPrice(String beer) throws Exception 
        {
		try {
			ArrayList<ArrayList<String>> results = db.getData("SELECT price FROM beers WHERE name=?",
					new ArrayList<String>(Arrays.asList(beer)));
			
			if(results != null) {
                           String values = beginXml("getPrice");
                           values += "<value>" +results.get(0).get(0)+ "</value>";
                           values += "</values>\n";
                           return values;
			}
			else {
				throw new Exception("Queried beer does not exist in the database.");
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}

		return null;
	}
	
	public String getCheapest() throws Exception
        {
            try {
                    ArrayList<ArrayList<String>> results = db.getData("SELECT name FROM beers ORDER BY price ASC;");

                    if(results != null)
                    {
                           for(ArrayList<String> res : results)
                           {
                               System.out.println("---------------------"+res.get(0));
                           }
                           String values = beginXml("getCheapest");
                           values += "<value>" +results.get(0).get(0)+ "</value>";
                           values += "</values>\n";
                           return values;
                    }
            } catch (SQLException e) {
                    e.printStackTrace();
            }

            return null;
	}
	
	
	public String getCostliest() 
        {
            try
            {
                    ArrayList<ArrayList<String>> results = db.getData("SELECT name FROM beers ORDER BY price DESC;");

                    if(results != null) 
                    {
                        for(ArrayList<String> res : results)
                        {
                            System.out.println("---------------------"+res.get(0));
                        }
                        String values = beginXml("getCostliest");
                        values += "<value>" +results.get(0).get(0)+ "</value>";
                        values += "</values>\n";
                        return values;
                    }
            } catch (SQLException e) {
                    e.printStackTrace();
            }

            return null;
	}
	
	public String getBeers() throws Exception 
        {       
                ArrayList<ArrayList<String>> results = db.getData("SELECT name FROM beers");

                if(results != null)
                {
                        String total = beginXml("getBeers");
                        for(ArrayList<String> beer : results) 
                                total += "\t<value>" + beer.get(0) + "</value>\n";

                        total += "</values>\n";
                        return total;
                }
                else
                    return "error";
	}
        
        public String beginXml(String methodName)
        {
            String total ="";
                total += "<?xml version='1.0' encoding='UTF-8' ?>";
                total += "<values>\n";
                total += "<name>"+methodName+"</name>\n";
            return total;
        }

	
	public String setBeerPrice(String beer, double price) throws Exception {
		
            int success = db.updateDb("UPDATE beers SET price =? WHERE name=?;",
                                     new ArrayList<>(Arrays.asList(String.valueOf(price),beer)));
            String total = beginXml("SetBeerPrice");         
            
                     if(success == 1)                            
                        total += "\t<value>True</value>\n";                    
                     else 
                        total += "\t<value>False</value>\n";
                     
            total += "</values>\n";
            return total;
	}

	
	public boolean isAdmin(String username, String password) throws Exception 
        {   
            ArrayList<ArrayList<String>> secondResults = db.getData("SELECT accessLevel FROM users WHERE username=? AND password=?",
                    new ArrayList<String>(Arrays.asList(username,password)));
           String admin = secondResults.get(0).get(0);

           if(admin.equalsIgnoreCase(ROLE_ADMIN))
                   return true;
           else 
                return false;
                
	}
	
	public boolean isCorrectAge(String userId)
        {
           
            try
            {
                ArrayList<ArrayList<String>> results = db.getData("SELECT user_id FROM tokens WHERE token=?", new ArrayList<String>(Arrays.asList(userId)));
                if(results != null)
                {       
                         ArrayList<ArrayList<String>> secondResults = db.getData("SELECT age FROM users WHERE id=?",
                                 new ArrayList<String>(Arrays.asList(results.get(0).get(0))));
                        int age = Integer.parseInt(secondResults.get(0).get(0));
                        if(age >= REQUIRED_AGE)
                                return true;
                        else 
                             return false;
                }
            }catch(SQLException e){e.printStackTrace();}catch(Exception es){es.printStackTrace();};
                return false;
	}	

    

    
}
