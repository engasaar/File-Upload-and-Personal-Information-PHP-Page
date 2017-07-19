<html>

<head>
    <title>regestration page</title>
</head>

<body>

    <form action="upload.php" method="post" enctype="multipart/form-data">

        <table width=500>

            <tr>
                <td align=left> Name </td>
                <td width=350><input type="text" name="name"></td>
            </tr>

            <tr>
                <td align=left> Age </td>
                <td width=350><input type="text" name="age"></td>
            </tr>

            <tr>
                <td align=left> Address</td>
                <td> <textarea cols="30" rows="5" name="address"></textarea> </td>
            </tr>
            <tr>
                <td align=left> Email</td>
                <td width=350><input type="text" name="email"></td>
            </tr>
            <tr>
                <td rowspan=2 align=left> Gender</td>

                <td> <input type="radio" name="gender" value="male" checked="true" />Male </td>
            </tr>
            <tr>
                <td> <input type="radio" name="gender" value="female" />Female</td>
            </tr>
            <tr>
                <td> Hobbies </td>

                <td>
                    <input type="checkbox" name="hoppy[]" value="football">Football
                    <input type="checkbox" name="hoppy[]" value="read">Read
                    <input type="checkbox" name="hoppy[]" value="travel">Travel
                    <input type="checkbox" name="hoppy[]" value="swim">Swim
                </td>
            </tr>
            <tr>

                <td>
                    File

                </td>
                <td>
                    <input type="file" name="fileToUpload" id="fileToUpload">



                </td>

            </tr>

            <tr>

                <td>
                    <input type="submit" value="submit" name="submit">
                </td>
                <td>
                    <input type="reset" value="reset">
                </td>

            </tr>

        </table>

    </form>



</body>

</html>
