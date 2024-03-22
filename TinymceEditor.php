<?php
class TinymceEditorPlugin extends MantisPlugin {
    function register() {
        $this->name = 'TinyMCE Editor Plugin';      # Proper name of plugin
        $this->description = 'Plugin to integer the TinyMCE editor with MantisBT';
                                             # Short description of the plugin
        #$this->page = 'config';     # Default plugin page
        
        $this->version = '0.1';              # Plugin version string
        $this->requires = array(             # Plugin dependencies
            'MantisCore' => '2.0',           # Should always depend on an appropriate
                                             # version of MantisBT
        );

        $this->author = 'Javi Escartin';     # Author/team name
        $this->contact = 'javi@javiescartin.com';
                                             # Author/team e-mail address
        $this->url = 'https://github.com/rantamplan76'; # Support webpage
    }


    function hooks() {
        return array(
            #Include the required javascript files at the end of de body
            'EVENT_LAYOUT_BODY_END' => 'includeTinyMCEjs'
         );
    }

    function includeTinyMCEjs() {
        echo '<script src="' . plugin_file( 'tinymce/tinymce.min.js' ) . '" referrerpolicy="origin"></script>';
        echo '<script type="text/javascript" src="' . plugin_file( 'tinymceeditor.js' ) . '"></script>';
    }

}