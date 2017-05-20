<?php
class ManageSchedule {
	public function __construct()
	{
		add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'schedule_page_init' ) );
	}

	public function add_plugin_page()
	{
		add_menu_page( 'Talkyangco Schedule Manager Page', 'Manage Schedule', 'manage_options', 'talkyangco/manage-schedule', array($this, 'manage_schedule'), 'dashicons-calendar', 6 );
	}

	public function schedule_page_init()
	{
		register_setting(
			'calendar_group',
			'calendar_name',
			array($this, 'sanitize')
			);

		add_settings_section(
			'setting_section_id',
			'New Schedule',
			array($this, 'print_section_info'),
			'my-setting-admin'
			);

		add_settings_field(
			'schedule_name',
			'Schedule Name',
			array($this, 'schedule_name_callback'),
			'my-setting-admin',
			'setting_section_id'
			);

		add_settings_field(
			'schedule_date',
			'Date',
			array($this, 'schedule_date_callback'),
			'my-setting-admin',
			'setting_section_id'
			);
	}

	public function sanitize( $input )
	{
		$new_input = array();
		if(isset($input['schedule_date']))
			$new_input['schedule_date'] = date_parse($input['schedule_date']);

		return $new_input;
	}

	public function print_section_info() {
		print 'Enter Schedule Information below:';
	}

	public function schedule_name_callback() {
		printf(
            '<input type="text" id="schedule_name" name="schedule_name" value="%s" style="width: 455px;" />',
            isset( $this->options['schedule_name'] ) ? esc_attr( $this->options['schedule_name']) : ''
        );
	}

	public function schedule_date_callback() {
		printf(
            '<input type="date" id="schedule_date" name="schedule_date" value="%s" />',
            isset( $this->options['schedule_date'] ) ? esc_attr( $this->options['schedule_date']) : ''
        );
	}

	public function manage_schedule() {
		global $wpdb;
		extract($_REQUEST);

		
		?>
		<div class="wrap">
			<h2>Welcome to Talkyangco Schedule Manager</h2>
			<form method="post" action="/wp-admin/admin.php?page=talkyangco/manage-schedule">
				<input type="hidden" id="id" name="id"></input>
				<?php
				settings_fields( 'calendar_group' );
				do_settings_sections('my-setting-admin');
				?>
				<?php
				submit_button();
				?>
				<label for="schedule_type_filter" class="form-label col-xs-2">Filter by: </label>
				<div class="col-xs-10">
					<select id="schedule_type_filter", name="schedule_type_filter">
						<option value="0">-- Select Schedule Name --</option>
					</select>
				</div>
			</form>
			<hr>
			<table class="wp-list-table widefat fixed striped">
				<thead>
					<tr>
						<th>Date</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<?php
				
				?>
				</tbody>
			</table>
			<form id="delete-form" method="post" action="/wp-admin/admin.php?page=talkyangco%2Fmanage-schedule">
				<input type="hidden" id="_wpnonce2" name="_wpnonce" />
				<input type="hidden" name="_wp_http_referer" value="/wp-admin/admin.php?page=talkyangco/manage-schedule" />
				<input type="hidden" id="del_schedule_id" name="del_schedule_id" />
			</form>
		</div>
		<script type="text/javascript">
		jQuery(function($){
			$('#schedule_name_filter').on("change", function(){
				window.location = '/wp-admin/admin.php?page=talkyangco/manage-schedule&schedule_name_filter=' + $(this).val();
			});
		});
		</script>
		<?php
	}
}

if( is_admin() )
    $philenglish_calendar_manager_page = new ManageSchedule();