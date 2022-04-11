<h1>Form</h1>
<form action="formSubmit" method="post">
    {{@csrf_field()}}
    <input type="text" name="fullname" id="fullname">
    <input type="submit" value="Send">
</form>