<form action="/api/agencies{{$agency->agency_id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="country" placeholder="Country">
    <input type="text" name="type" placeholder="Type">


    <input type="date" name="end_date" placeholder="End_date">
    <select name="status" placeholder="Status">
        <option value="1" <?php echo $agency->status == 1 ? 'selected' : '' ?>>Open</option>
        <option value="0" <?php echo $agency->status == 0 ? 'selected' : '' ?>>Closed</option>
    </select>
    <input type="submit" value="Ok">
</form>