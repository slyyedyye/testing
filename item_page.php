<html>
<head>
	<title>Challenge Page</title>
</head>

<h3>Welcome to the AppSec LFI Challenge</h3>

<p>Please search an item from the table below to view its source.</p>

<table style="width:65%">
	<tr>
		<th>Info</th>
		<th>Item</th>
	</tr>
	<tr>
		<td>A blank entry...</td>
		<td>...</td>
	</tr>
	<tr>
		<td>This should be an interesting file.</td>
                <td>flag_01.txt</td>            
        </tr>
</table>

<br /><br />

<form action="search.php" method="get">
	<label for="item">Item</label> <input type="text" id="item" name="item"><br /><br />
	<button type="submit">Search</button>
</form>
<br /><br />
<p>Please see the <a href="/info.html">info</a> page for more infomation on LFI vulnerabilities.</p>
