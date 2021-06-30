<html>
<head>
</head>
<body>

<form action="{{url('test')}}" method="post">
@csrf
<table>
<tr>
<th>
<label>Virus Composition</label>
</th>
<th>
<input type="text" name="str2" />
</th>
</tr>
<tr>
<th>
<label>Enter Number Of People</label>
</th>
<th>
<input type="number" id="num" name="num" min="1" max="10">
</th>
</tr>
<tr>
<th>
<label>Blood Composition</label>
</th>

<th>
<input type="text" name="str[]"/>
</th>
<th>
<input type="text" name="str[]"/>
</th>
<th>
<input type="text" name="str[]"/>
</th>
<th>
<input type="text" name="str[]"/>
</th>
<th>
<input type="text" name="str[]"/>
</th>
</tr>

</table>
<input type="submit">

<br><br>
</form>

</body>
</html>