<?php 
session_start();

?>
<form name="install" id="install"
	action="index.php?action=open_company<?php echo $lang ? '&amp;lang='.$lang : ''; ?>"
	method="post">
	<table class="ui-widget"
		style="margin-left: auto; margin-right: auto; width: 800px">
		<thead class="ui-widget-header">
			<tr>
				<th align="right"><img
					src="<?= BASEURL;?>/modules/phreedom/images/phreesoft_logo.png"
					alt="Phreedom Small Business Toolkit" height="50" /></th>
			</tr>
			<tr>
				<th colspan="2"><?= $data['output']; ?></th>
			</tr>
		</thead>
		<tbody class="ui-widget-content">
			<tr>
				<td><?= INTRO_FINISHED ; ?></td>
			</tr>
			<tr>
				<button type="submit" name="submit">Submit</button>
			</tr>
		</tbody>
	</table>
</form>