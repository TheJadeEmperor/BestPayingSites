<form method=post>
<table>
    <tr>
        <td>Site name</td>
        <td><input type=activeField name=siteName /></td>
    </tr>
    <tr>
        <td>link URL</td>
        <td><input type=activeField name=linkSite size=40 /></td>
    </tr>
    <tr>
        <td>image URL</td>
        <td><input type=activeField name=imageSite size=40 /></td>
    </tr>
    <tr>
        <td align=center colspan=2>
            <input type=submit value=" Submit " />
        </td>
    </tr>
</table>
</form>

<?
$siteName = $_POST['siteName'];
print('
$imgSite = "'.$_POST['imageSite'].'";<br />
$linkSite = "'.$_POST['linkSite'].'";<br />
$image = img($imgSite, "'.$siteName.'", "'.$siteName.'");<br />
echo "&lt;p&gt;".anchor($linkSite, "target=_blank", $image)."&lt;/p&gt;";');
?>