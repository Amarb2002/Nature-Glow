<title>your page is loding ...</title>
<%@page import="java.sql.*"%>
<%@page import="hub.studentdb"%>
<jsp:useBean id="s" class="hub.studentdb"/>
<jsp:getProperty name="s" property="conn"/>
<%
    String bt=request.getParameter("valid");
    if(bt==null)
    {
        out.println("<script>history.back();</script>");
    }
    else
    {
            String a=request.getParameter("fn");
            String b=request.getParameter("ln");
            String c=request.getParameter("em");
            String d=request.getParameter("mob");
            String e=request.getParameter("cy");
            String f=request.getParameter("clg");
            String g=request.getParameter("brn");
            String h=request.getParameter("sem");

            ResultSet rs=s.stm.executeQuery("select * from std_details where s_email='"+c+"'");
            if(!rs.next())
            {
                    ResultSet rs1=s.stm.executeQuery("select * from std_details where s_mob='"+d+"'");
                    if(!rs1.next())
                    {
                            int z=s.stm.executeUpdate("insert into std_details values(null,'"+a+"','"+b+"','"+c+"','"+d+"','"+e+"','"+f+"','"+g+"','"+h+"','NA')");
                            int z1=s.stm.executeUpdate("insert into login values('"+c+"','"+d+"','student','NA','NA','requested')");
                            out.println("<script>alert('You have Registred Successfully');alert('Username is Reg. Email & Password id Reg. Mobile No.');document.location='index.jsp';</script>");
                    }
                    else
                    {
                        out.println("<script>alert('Mobile No. Already Used..!');history.back();</script>");
                    }
            }
            else
            {
                out.println("<script>alert('Email Already Used..!');history.back();</script>");
            }
    }
%>