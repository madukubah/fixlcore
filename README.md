## Fixlcore

repo ini adalah starter untuk membuat aplikasi yang merupakak framework CodeIgniter yang telah ditambahkan beberapa library 
1. ion auth ( untuk login dan register serta user management )
2. rest api ( untuk membuat service API )

kelebihan dari core ini adalah adanya template untuk meng-generate widget seperti tabel, modal, form
berikut contohnya 
1. pembuatan tabel

```
  public function get_table_config( $_page, $start_number = 1 )
  {
	// sesuaikan nama tabel header yang akan d tampilkan dengan nama atribut dari tabel yang ada dalam database
    $table["header"] = array(
			'username' => 'username',
			'group_name' => 'Group',
			'user_fullname' => 'Nama Lengkap',
			'phone' => 'No Telepon',
			'address' => 'Alamat',
			'email' => 'Email',
		  );
		  $table["number"] = $start_number ;
		  $table[ "action" ] = array(
			array(
			  "name" => "Detail",
			  "type" => "link",
			  "url" => site_url($_page."detail/"),
			  "button_color" => "primary",
			  "param" => "id",
			),
			array(
			  "name" => "Edit",
			  "type" => "link",
			  "url" => site_url($_page."edit/"),
			  "button_color" => "primary",
			  "param" => "id",
			),
			array(
			  "name" => 'X',
			  "type" => "modal_delete",
			  "modal_id" => "delete_category_",
			  "url" => site_url( $_page."delete/"),
			  "button_color" => "danger",
			  "param" => "id",
			  "form_data" => array(
				"id" => array(
				  'type' => 'hidden',
				  'label' => "id",
				),
				"group_id" => array(
				  'type' => 'hidden',
				  'label' => "group_id",
				),
			  ),
			  "title" => "User",
			  "data_name" => "user_fullname",
			),
		);
    return $table;
  }
  
```
2. pebuatan form
