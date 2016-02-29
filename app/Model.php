<?php namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;
use \DB;
use \Cache;

class Model extends BaseModel {

	public function datatable ( $th = [] ) {
		$dataGrid = new \Cartalyst\DataGrid\Environment( null, config( 'cartalyst.data-grid.handlers' ) );

		return $dataGrid->make(
		    $this,
		    $th,
		    array(
		        // 'sort'      => $request->sortBy,
		        // 'direction' => 'desc',
		        'method' => config( 'cartalyst.data-grid.method' ),
		        'throttle' => config( 'cartalyst.data-grid.throttle' ),
		        'threshold' => config( 'cartalyst.data-grid.threshold' ),
		    )
		);
	}

	public function getFieldComment( $field_name ) {
		return isset( $this->getAllfieldComment()[$field_name] ) ? $this->getAllfieldComment()[$field_name] : false;
	}

	public function getAllfieldComment () {
		return Cache::remember( "getAllfieldComment:{$this->table}", 20, function() {
		    $res = DB::table('information_schema.columns')
		   		->select( 'column_name', 'column_comment' )
		   		->where( 'table_name', $this->table )
		   		->where( 'TABLE_SCHEMA', env('DB_DATABASE') )
		   		->get();

			return collect( $res )->lists('column_comment', 'column_name');
		});
	}

	public function getFieldType( $field_name ) {
		return isset( $this->getAllfieldType()[$field_name] ) ? $this->getAllfieldType()[$field_name] : false;
	}

	public function getAllfieldType () {
		return Cache::remember( "getAllfieldType:{$this->table}", 20, function() {
		    $res = DB::table('information_schema.columns')
		   		->select( 'column_name', 'DATA_TYPE' )
		   		->where( 'table_name', $this->table )
		   		->where( 'TABLE_SCHEMA', env('DB_DATABASE') )
		   		->get();

			return collect( $res )->lists('DATA_TYPE', 'column_name');
		});
	}
}
