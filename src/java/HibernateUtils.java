
import org.hibernate.SessionFactory;
import org.hibernate.cfg.AnnotationConfiguration;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author mateosokac
 */
public class HibernateUtils {
   
    private static final SessionFactory sessionFactory;

    static {
      try {
           sessionFactory = new AnnotationConfiguration().configure().buildSessionFactory();
       } catch (Throwable ex) {
           // Log the exception.
       System.err.println("Initial SessionFactory creation failed." + ex);
       throw new ExceptionInInitializerError(ex);
   }
  }

  public static SessionFactory getSessionFactory() {
      return sessionFactory;
  }
}

