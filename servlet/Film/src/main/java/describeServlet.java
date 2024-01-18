import java.io.*;
import java.sql.*;
import jakarta.servlet.annotation.*;
import jakarta.servlet.http.*;

@WebServlet("/servlet1")
public class describeServlet extends HttpServlet{

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

            String id=request.getParameter("id");

            String query="select titolo, anno, paese, regista from film where id=?";

            PreparedStatement stmt=conn.prepareStatement(query);
            stmt.setString(1,id);
            ResultSet res=stmt.executeQuery();

            String titolo=null;
            String anno=null;
            String paese=null;
            String regista=null;

            out.print("<h2>Film</h2>");
            if(res.next()) {
                titolo=res.getString("titolo");
                anno=res.getString("anno");
                paese=res.getString("paese");
                regista=res.getString("regista");
                out.print("<p>titolo: "+titolo+", anno: "+anno+", paese: "+paese+", regista: "+regista+"</p>");
            }

            out.print("<form action='/servlet1' method='POST'>");
            out.print("<input type='hidden' name='id' value='"+id+"'>");
            out.print("titolo: <input type='text' name='titolo' value='"+titolo+"'>");
            out.print("anno: <input type='text' name='anno' value='"+anno+"'>");
            out.print("paese: <input type='text' name='paese' value='"+paese+"'>");
            out.print("regista: <input type='text' name='regista' value='"+regista+"'>");
            out.print("<button name='action' value='update'>aggiorna</button>");
            out.print("</form>");

            out.print("<form action='/servlet1' method='POST'>");
            out.print("<input type='hidden' name='id' value='"+id+"'>");
            out.print("<button name='action' value='delete'>delete</button>");
            out.print("</form>");

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
                if(request.getParameter("action").equals("update")){
                    String id=request.getParameter("id");
                    String titolo=request.getParameter("titolo");
                    String anno=request.getParameter("anno");
                    String paese=request.getParameter("paese");
                    String regista=request.getParameter("regista");

                    String query="UPDATE film set titolo=?, anno=?, paese=?, regista=? where id=?";
                    PreparedStatement stmt=conn.prepareStatement(query);
                    stmt.setString(1, titolo);
                    stmt.setString(2, anno);
                    stmt.setString(3, paese);
                    stmt.setString(4, regista);
                    stmt.setString(5, id);
                    stmt.executeUpdate();
                    out.print("update effettuato <br>");
                    out.print("<a href='/servlet1?id="+id+"'>torna indietro</a>");

                    
                }

                if(request.getParameter("action").equals("delete")){
                    String id=request.getParameter("id");
                    String query="Delete from film where id=?";

                    PreparedStatement stmt=conn.prepareStatement(query);
                    stmt.setString(1, id);
                    stmt.executeUpdate();

                    out.print("deleted correctly<br>");

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
