<form method="post" enctype="multipart/form-data">
    <div><?php echo $message; ?></div>
    <?php echo $max_file_size_tag; ?>
    <input type="file" accept="video/*" ID="fileSelect" runat="server" size="20" name="filename" action="/vids/file-upload.php">
    <select name="course">
        <option value="select" selected>Select</option>
        <option value="java">Java</option>
        <option value="python">Python</option>
        <option value="vb">Visual Basic</option>
        <option value="c">C/C++</option>
        <option value="ruby">Ruby</option>
    </select>
    <input type="submit" value="Upload" name="submit">
</form>