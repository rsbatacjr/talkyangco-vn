<?php
class ManageWebLinks {
	public function __construct()
	{
		add_action( 'admin_menu', array( $this, 'add_manage_link_page' ) );
		add_action( 'admin_init', array( $this, 'link_page_init' ) );
	}

	public function add_manage_link_page()
	{
		add_menu_page( 'Talkyangco Web Pages Page', 'Manage Links', 'manage_options', 'talkyangco/manage-weblinks', array($this, 'manage_web_link'), 'dashicons-calendar', 6 );
	}

	public function link_page_init()
	{
		register_setting(
			'link_group',
			'link_name',
			array($this, 'sanitize')
			);

		add_settings_section(
			'link_setting_section_id',
			'New Link',
			array($this, 'print_section_info'),
			'link-setting-admin'
			);

		add_settings_field(
			'label_name',
			'Label',
			array($this, 'label_name_callback'),
			'link-setting-admin',
			'link_setting_section_id'
			);

		add_settings_field(
			'link_to',
			'Link',
			array($this, 'link_to_callback'),
			'link-setting-admin',
			'link_setting_section_id'
			);

		add_settings_field(
			'order_number',
			'Order',
			array($this, 'order_number_callback'),
			'link-setting-admin',
			'link_setting_section_id'
			);
	}

	public function sanitize( $input )
	{
		$new_input = array();
		if(isset($input['label_name']))
			$new_input['label_name'] = htmlentities($input['label_name']);

		return $new_input;
	}

	public function print_section_info() {
		print 'Enter Schedule Information below:';
	}

	public function label_name_callback() {
		printf(
            '<input type="text" id="label_name" name="label_name" value="%s" style="width: 455px;" />',
            isset( $this->options['label_name'] ) ? esc_attr( $this->options['label_name']) : ''
        );
	}

	public function link_to_callback() {
		printf(
            '<input type="text" id="link_to" name="link_to" value="%s" style="width: 455px;" />',
            isset( $this->options['link_to'] ) ? esc_attr( $this->options['link_to']) : ''
        );
	}

	public function order_number_callback() {
		printf(
            '<input type="number" id="order_number" name="order_number" value="%i" style="width: 100px;" />',
            isset( $this->options['order_number'] ) ? esc_attr( $this->options['order_number']) : ''
        );
	}

	public function manage_web_link() {
		global $wpdb;
		extract($_REQUEST);

		if(isset($label_name)) {
			if($id == "") {
				$wpdb->query($wpdb->prepare(
					"INSERT INTO {$wpdb->prefix}page_links (label, link_to, order_number) VALUES (%s, %s, %i)", $label_name, $link_to, $order_number
					));
			}
		}

		$weblinks = $wpdb->get_results(
				"SELECT * FROM {$wpdb->prefix}page_links ORDER BY order_number"
			);
		?>
		<div class="wrap">
			<h2>Welcome to Talkyangco Schedule Manager</h2>
			<form method="post" action="/wp-admin/admin.php?page=talkyangco/manage-weblinks">
				<input type="hidden" id="id" name="id"></input>
				<?php
				settings_fields( 'link_group' );
				do_settings_sections('link-setting-admin');
				?>
				<?php
				submit_button();
				?>
			</form>
			<hr>
			<table class="wp-list-table widefat fixed striped">
				<thead>
					<tr>
						<th style="width:45%;">Label</th>
						<th style="width:45%;">Link</th>
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
				<input type="hidden" name="_wp_http_referer" value="/wp-admin/admin.php?page=talkyangco/manage-weblinks" />
				<input type="hidden" id="del_schedule_id" name="del_schedule_id" />
			</form>
		</div>
		<?php
	}
}

if( is_admin() )
    $philenglish_link_manager_page = new ManageWebLinks();