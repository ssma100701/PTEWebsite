<html>
   <body>
		<form action="/update" method="POST" enctype="multipart/form-data">
		    {{ csrf_field() }}
		    Book title:
		    <br />
		    <input type="text" name="title" />
		    <br /><br />
		    Logo:
		    <br />
		    <input type="file" id='avatar' name="avatar" />
		    <br /><br />
		    <input type="submit" value=" Save " />
		</form>
   </body>
</html>