<center>
	<b><font color="red"><?php echo $this->Session->flash('auth'); ?> </font> </b>
	<font color="red"><?php echo $this->Session->flash(); ?> </font>
</center>
<?php
echo $this->Form->create(null, array('url' => array('controller' => 'accounts', 'action' => 'login')));
?>
<table style="border: 0; width: 100%">
	<tr>
		<td rowspan="10" width="195px">
			<?php
			//echo $this->Html->image('loginLeft.png', array('width' => '180px'));
			?>
		</td>
		<td colspan="2" align="center">
		</td>
		<td rowspan="10" width="185px" style="vertical-align: top;">
			<div style="float: right; text-align: right; display: none;">
				<?php echo $this->Html->link("Register for account", "/../pddreg/MerchantRegistration.htm"); ?>
				<br/>
				<?php echo $this->Html->link("Contact us", array("controller" => "accounts", "action" => "contactus")); ?>
			</div>
			<?php
			//echo $this->Html->image('loginRight.png', array('width' => '120px'));
			?>
		</td>
	</tr>
	<tr>
		<td align="right"><b><font color="white" size="2">Username :</font> </b>
		</td>
		<td align="left">
			<?php
			echo $this->Form->input('Account.username', array('label' => '', 'style' => 'width:112px;'));
			?> 
			<script type="text/javascript">
			jQuery("#AccountUsername").focus();
			</script>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td></td>
	</tr>
	<tr>
		<td align="right">
			<b><font color="white" size="2">Password :</font></b>
		</td>
		<td align="left">
			<?php
			echo $this->Form->input('Account.password', array('label' => '', 'style' => 'width:112px; margin-top: 8px;', 'type' => 'password'));
			?>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td></td>
	</tr>
	<tr>
		<td align="right">
			<b><font color="white" size="2">Code verification :</font></b>
		</td>
		<td align="left">
			<div style="float: left; margin-right: 10px;">
				<?php
				echo $this->Form->input(
					'Account.vcode', 
					array(
						'label' => '', 
						'style' => 'width:112px;', 
						'div' => array('style' => 'margin-top:8px;')
					)
				);
				?>
			</div>
			<div style="float: left;">
				<script type="text/javascript">
				function __chgVcodes() {
					document.getElementById("imgVcodes").src =
						"<?php echo $this->Html->url(array('controller' => 'accounts', 'action' => 'phpcaptcha')); ?>"
						+ "?" + Math.random();
				}
				</script>
				<?php
				echo $this->Html->link(
						$this->Html->image(array('controller' => 'accounts', 'action' => 'phpcaptcha'),
								array('style' => 'width:100px; height:35; border: 1px solid #222222;', 'id' => 'imgVcodes', 'onclick' => 'javascript:__chgVcodes();')
						),
						'#',
						array('escape' => false, 'title' => 'Click to try another one.(By entering this code you help yourself prevent spam and fake login.)'),
						false
				);
				?>
			</div>
			<div style="float: left;">
				<div id="playPhpcaptcha">
					<object type="application/x-shockwave-flash"
						data="../img/securimage_play.swf?bgcol=#ffffff&amp;icon_file=../img/audio_icon.png&amp;audio_file=<?php
							echo $this->Html->url(array('controller' => 'accounts', 'action' => 'playPhpcaptcha')); 
						?>"
						style="width: 35px; height: 35px; border: 1px solid #666666; margin-top: 1px; margin-left: 2px;">
						<param name="movie"
							value="../img/securimage_play.swf?bgcol=#ffffff&amp;icon_file=../img/audio_icon.png&amp;audio_file=<?php
								echo $this->Html->url(array('controller' => 'accounts', 'action' => 'playPhpcaptcha')); 
							?>"/>
					</object>
				</div>
			</div>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td style="color: #dddddd;">Example: 9x4=36, please enter 36.</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
		<br/>
		<?php
		echo $this->Form->submit('login-button.png', array('style' => 'border:0px;width:160px;height:45px;'));
		?>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="2"><br /> 
			<?php
			echo $this->Html->link(
					'<b><font size="2">Lost password?</font></b>',
					array('controller' => 'accounts', 'action' => 'forgotpwd'),
					array('escape' => false), false
			);
			?>
			<br /> <br /> <font color="#ccba4c">We must have your email on our account.</font>
		</td>
	</tr>
</table>
<?php
echo $this->Form->end();
?>

<div style="margin: 0px 15px 0px 15px">
	<?php
	echo $this->element('frauddefblock');
	?>
</div>

<script type="text/javascript">
for (var i = 0; i < 10; i++) {
	jQuery(".suspended-warning").animate({opacity: 'toggle'}, "slow");
}
</script>
