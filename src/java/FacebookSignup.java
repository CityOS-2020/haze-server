/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.io.IOException;
import java.io.PrintStream;
import java.io.PrintWriter;
import java.math.BigInteger;
import java.security.SecureRandom;
import java.util.Enumeration;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author mateosokac
 */
@WebServlet(urlPatterns = {"/FacebookSignup"})
public class FacebookSignup extends HttpServlet {

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        PrintWriter out = response.getWriter();
        out.write("lepo");
        out.close();
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        SecureRandom random = new SecureRandom();
        PrintWriter out = response.getWriter();
        
        String name = request.getParameter("name");
        String last = request.getParameter("lastname");
        String email = request.getParameter("email");
        String gender = request.getParameter("gender");
        String birthday = request.getParameter("birthday");
        String location = request.getParameter("location");
        String phone = request.getParameter("phone_num");
       
        if(!name.equals("") && !last.equals("") && !email.equals("")){
            Bazica bazica = new Bazica(response);
            bazica.saveNewUser(name, last, email, new BigInteger(50, random).toString(32), gender, birthday, location, phone);
            out.println("201");
            //sendEmail(request,response);
        }
        else
            out.println("404");
        
    }

    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>
    
    

}
