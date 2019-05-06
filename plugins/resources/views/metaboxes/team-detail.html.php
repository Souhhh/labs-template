<table class="form-table">
    <tr>
        <th><?php_e("Liste de métiers"); ?></th>
        <td>
            <select name="membre_title" id="membre_title">
            <option value="">--</option>
<!-- 1-5 -->
            <option value="medecin"
                <?php echo ($membre == "medecin" ? 'selected' : ''); ?>>
            <p>Médecin</p>
            </option>

            <option value="architect"
                <?php echo ($service == "architect" ? 'selected' : ''); ?>>
            <p>Architect</p>
            </option>

            <option value="project_manager"
                <?php echo ($service == "project_manager" ? 'selected' : ''); ?>>
            <p>Project Manager</p>
            </option>

            

            </select>
        </td>
    </tr>
</table>