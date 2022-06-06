<%
	Dim responseText = ""
	
	Dim action = Request.Form("action")
	If action = "Test" Then
		responseText = test()
	End IF


	Response.Write(Request.Form("fname") & Request.Form("class"))
%>
<script runat="server">
	Function test() As String
		Dim response_text = ""

		return response_text
	End Function
</script>