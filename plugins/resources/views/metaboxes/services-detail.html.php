<table class="form-table">
    <tr>
        <th><?php_e("Icônes des services"); ?><?php echo $service; ?></th>
        <td>
            <select name="labs_icon_services" id="labs_icon_services">
            <option value="flaticon-001-picture"><?php echo ($service == "flaticon-001-picture" ? "selected" : "") ?><i class="flaticon-001-picture"></i></option>
            
            </select>
        </td>
    </tr>
</table>