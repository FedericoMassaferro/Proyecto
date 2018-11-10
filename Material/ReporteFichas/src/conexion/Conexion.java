package conexion;
import java.sql.*;
import javax.swing.JOptionPane;
public class Conexion {
   private static Connection cnx;                                                          //creamos una conexion nula
   private static final String driver = "com.mysql.jdbc.Driver";
   private static final String user= "root";
   private static final String ps= "";
   private static final String URL="jdbc:mysql://localhost:3306/clinica?autoReconnect=true&useSSL=false";
   
   public Conexion(){
       cnx=null;
   }
   
   public Connection Get_conexion(){
       try {
            Class.forName(driver);                                                                  //ingresamos a la DB
            cnx = DriverManager.getConnection(URL, user, ps);                                       //ingresamos union,usuario,contaseña
         } catch (SQLException|ClassNotFoundException ex) {                                                                //se fija si hay un error
            JOptionPane.showMessageDialog(null, ex.getMessage(),"error en la conexion",JOptionPane.ERROR_MESSAGE);
         }
      return cnx; 
   }
   
   public void Desconectar(){                                           //creamos una clase para cerrar
      try{                                                                          //nos fijamos si no es nula
         cnx.close();                                                                               //cerramos la conexion con la DB
      }
      catch(SQLException e){
            JOptionPane.showMessageDialog(null, e.getMessage(),"error al desconectar",JOptionPane.ERROR_MESSAGE);
        }
   }
}
