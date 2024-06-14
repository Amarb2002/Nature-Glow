<%@page import="java.sql.*"%>
<%@page import="hub.studentdb"%>
<jsp:useBean id="s" class="hub.studentdb"/>
<jsp:getProperty name="s" property="conn"/>
<%
    String unn=request.getParameter("id");
    ResultSet rs=s.stm.executeQuery("select * from login where username='"+unn+"'");
    rs.next();
        String neww=request.getParameter("np");
        String comp=request.getParameter("cp");
        if(neww.equals(comp))
        {
            int z1=s.stm.executeUpdate("update login set password='"+neww+"' where username='"+unn+"'");
            out.println("<script>alert('Password Changed Successfully...'); document.location='login.jsp';</script>");
        }
        else{
            out.println("<script>alert('Password Mismatch...'); document.location='forgotpass.jsp';</script>");
        }
%>