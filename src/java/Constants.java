/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


import java.util.Calendar;

/**
 *
 * @author mateosokac
 * 
 * class for constants 
 */
public abstract class Constants 
{
    public final String HOST = "localhost";
    public final String DRIVER = "mysql";
    public final String NAME = "APP";
    public final String PORT = "1527";
    public final String USER = "app";
    public final String PASSWORD = "app";

    public final String ROLE_ADMIN = "ADMIN";
    public final String ROLE_USER = "USER";

    public final int REQUIRED_AGE = 21;

    public final int EXPIRATION = 10000; 
    
    public static final int CURRENT_TIME = Calendar.HOUR_OF_DAY + 9;
    
    public static final String TOKEN = "tokenTest1";
    
    public static final String START = "23:59";
    public static final String END = "10:00";
    public static final String MESSAGE = "The Service is not running between " + START + " and " + END;
	
}
