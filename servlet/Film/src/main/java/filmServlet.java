import java.io.*;
import java.sql.*;
import jakarta.servlet.annotation.*;
import jakarta.servlet.http.*;

@WebServlet("/servlet")
public class filmServlet extends HttpServlet{

    Connection conn;
    PrintWriter out;
    public void init(){
        try{
            String servername="localhost";
            String username="root";
            String password="Giovanni98+";
            String name_db="Films";
            conn=DriverManager.getConnection("jdbc:mysql://"+servername+"/"+name_db,username,password);
        }
        catch(Exception e){
            e.printStackTrace();
        }
        
    }

    public void doGet(HttpServletRequest request, HttpServletResponse response){
        try{
            response.setContentType("text/html");
            out=response.getWriter();

            String query="select id,titolo from film";

            PreparedStatement stmt=conn.prepareStatement(query);
            ResultSet res=stmt.executeQuery();

            out.print("<h2>Film</h2>");
            while (res.next()) {
                int id=res.getInt("id");
                String titolo=res.getString("titolo");
                out.print("<p> title: <a href='/servlet1?id="+id+"'>"+titolo+"</a></p>");
                out.print("----------------------------------------------<br>");
            }

            out.print("<a href='index.jsp'>torna indietro</a>");

        }
        catch(Exception e){
            e.printStackTrace();
        }
    }

    public void doPost(HttpServletRequest request, HttpServletResponse response){
        try{

            response.setContentType("text/html");
            out=response.getWriter();

            if(request.getParameter("action")!=null){
                if(request.getParameter("action").equals("create")){
                    String titolo=request.getParameter("titolo");
                    String anno=request.getParameter("anno");
                    String paese=request.getParameter("paese");
                    String regista=request.getParameter("regista");

                    String query="INSERT INTO film(titolo,anno,paese,regista) values(?,?,?,?)";
                    PreparedStatement stmt=conn.prepareStatement(query);
                    stmt.setString(1, titolo);
                    stmt.setString(2, anno);
                    stmt.setString(3, paese);
                    stmt.setString(4, regista);
                    stmt.executeUpdate();
                    out.print("inserimento effettuato <br>");
                    out.print("<a href='index.jsp'>torna indietro</a>");
                    
                }
            }

            
        }
        catch(Exception e){
            e.printStackTrace();
        }
    }

    public void destroy(){
        try{
            if(conn!=null)
                conn.close();
        }
        catch(Exception e){
            e.printStackTrace();
        }
        
    }


}