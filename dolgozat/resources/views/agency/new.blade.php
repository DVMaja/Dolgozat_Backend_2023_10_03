<form action="/api/agencies" method="post">
    {{csrf_field()}}
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="country" placeholder="Country">
    <input type="text" name="type" placeholder="Type">
    
    <input type="date" name="end_date" placeholder="End_date">
    <select name="status" placeholder="Status">
        <option value="1">Open</option>
        <option value="0">Closed</option>
    </select>
    <input type="submit" value="Ok">
</form>