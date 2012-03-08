<?php
class Post extends AppModel {
    public $name = 'Post';

    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );

    public $actsAs = array( 
	'Uploader.Attachment' => array(
		'fileName' => array(
			'name'		=> 'formatFileName',			// Name of the function to use to format filenames
			'baseDir'	=> '',							// See UploaderComponent::$baseDir
			'uploadDir'	=> 'files/uploads/',			// See UploaderComponent::$uploadDir
			'dbColumn'	=> 'image_path',				// The database column name to save the path to
			'importFrom'	=> '',						// Path or URL to import file
			'defaultPath'	=> '',						// Default file path if no upload present
			'maxNameLength'	=> 30,						// Max file name length
			'overwrite'	=> true,						// Overwrite file with same name if it exists
			'stopSave'	=> true,						// Stop the model save() if upload fails
			'allowEmpty'	=> true,					// Allow an empty file upload to continue
			'transforms' => array(						// What transformations to do on images: scale, resize, etc
				//array('method' => 'scale', 'percent' => .3, 'dbColumn' => 'thumb_path')
				array('method' => 'resize', 'width' => 400, 'height' => 200, 'dbColumn' => 'thumb_path') // Removes original image and uses this one instead
			),
			's3'		=> array(),						// Array of Amazon S3 settings
			'metaColumns'	=> array(					// Mapping of meta data to database fields
				'ext' => '',
				'type' => '',
				'size' => '',
				'group' => '',
				'width' => '',
				'height' => '',
				'filesize' => ''
			)	
		)
	)
);

//$this->Uploader = new Uploader(array('tempDir' => TMP));
}