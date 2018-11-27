<?php
include_once 'header.php';
include_once 'locations_model.php';
?>


<div id="map"></div>

<!------ Include the above in your HEAD tag ---------->
<script>
</script>

<div style="display: none" id="form">
    <table class="map1">
        <tr>
            <input name="id" type='hidden' id='id'/>
            <td><a>Description:</a></td>
            <td><textarea disabled id='description' placeholder='Description'></textarea></td>
        </tr>
        <tr>
            <td><b>Confirm Location ?:</b></td>
            <td><input id='confirmed' type='checkbox' name='confirmed'></td>
        </tr>

        <tr><td></td><td><input type='button' value='Save' onclick='saveData()'/></td></tr>
    </table>
</div>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyA3Izhy-nMsv0obB8VlWg05ROu3cCs03k4&callback=initMap">
</script>