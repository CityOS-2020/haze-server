
import Modeli.User;
import org.hibernate.cfg.AnnotationConfiguration;
import org.hibernate.tool.hbm2ddl.SchemaExport;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author mateosokac
 */
public class StartServer {

    public static void main(String[] args)
    {
        AnnotationConfiguration c = new AnnotationConfiguration();
        c.addAnnotatedClass(User.class);
        c.configure("hibernate.cfg.xml");
        new SchemaExport(c).create(true,true);
    }
}
