<%@page import="java.sql.*"%>
<%@page import="hub.studentdb"%>
<jsp:useBean id="s" class="hub.studentdb"/>
<jsp:getProperty name="s" property="conn"/>
<%
    String un=request.getParameter("id");
    String as=request.getParameter("sa");
    ResultSet rs=s.stm.executeQuery("select * from login where s_answer='"+as+"'");
    if(rs.next())
    {%>
                <!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Change Password</title>
                    <link rel="stylesheet" href="login_tmp/logd.css">
                    <script src="login_tmp/symbol.js"></script>
                </head>

                <body>
                    <div class="container">
                        <div class="form-box">
                            <h1 id="title">Change Your Password</h1>
                            <form name="form1" method="post" action="forgotpass3.jsp">
                                <div class="" style="height: 150px">
                                    <div class="input-field">
                                        <i class="fa-solid fa-circle-user"></i>
                                        <input type="text" placeholder="Enter New Password" id="np" name="np">
                                    </div>
                                    <div class="input-field">
                                        <i class="fa-solid fa-lock"></i>
                                        <input type="password" placeholder="Confirm Password" id="cp" name="cp">
                                    </div>
                                </div>
                                <div class="btn-field">
                                    <button id="valid" name="valid" type="Submit">Change</button>
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
        out.println("<ript>alert('Wrong Answer....'); history.back();</ript>");
    }
%>