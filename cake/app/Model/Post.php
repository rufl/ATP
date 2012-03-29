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
							array('method' => 'resize', 'width' => 150, 'height' => 150, 'dbColumn' => 'thumb_path', 'append' => '_th', 'quality' => 80), // Removes original image and uses this one instead
							array('method' => 'resize', 'width' => 500, 'height' => 500, 'dbColumn' => 'preview_path', 'append' => '_pr', 'quality' => 80) // Removes original image and uses this one instead
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

}