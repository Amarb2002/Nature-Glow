<%@page import="java.sql.*"%>
<%@page import="hub.studentdb"%>
<jsp:useBean id="s" class="hub.studentdb"/>
<jsp:getProperty name="s" property="conn"/>
<%
    String un=request.getParameter("uname");
    ResultSet rs=s.stm.executeQuery("select * from login where username='"+un+"'");
    if(rs.next())
    {
    %>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Verification</title>
            <link rel="stylesheet" href="login_tmp/logd.css">
            <script src="login_tmp/symbol.js"></script>
        </head>

        <body>
            <div class="container">
                <div class="form-box">
                    <h1 id="title">Verification</h1>
                    <form name="form1" method="post" action="forgotpass2.jsp">
                        <div class="input-group">
                            <div class="input-field">
                                <i class="fa-solid fa-question"></i>
                                <input type="text" placeholder="<%=rs.getString("s_question")%>" >
                            </div>
                            <div class="input-field">
                                <i class="fa-solid fa-comment-dots"></i>
                                <input type="password" placeholder="Enter Answer" id="sa" name="sa">
                            </div>
                            <p>This is not You ?
                                <a href="forgotpass.jsp"> Click Here</a>
                        </div>
                        <div class="btn-field">
                            <button id="valid" name="valid" type="Submit">Next</button>
                            <button id="signup" type="reset" class="disable">Reset</button>
                        </div>
                        <div><input type="hidden" name="id" id="id" value="<%=un%>">
                        </div>
                    </form>
                </div>
            </div>
        </body>

        </html>
    <%
    }
    else
    {
        out.println("<script>alert('Invalid OR Wrong Username');document.location='forgotpass.jsp';</script>");
    }
%>