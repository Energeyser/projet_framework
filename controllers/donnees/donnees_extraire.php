<?php
    $format='csv';
    var_dump($format);

    $sql = "SELECT * FROM data";

    mysql_connect('localhost', 'root', '');

    mysql_select_db('rentree');

    $export = mysql_query ( $sql ) or die ( "Sql error : " . mysql_error( ) );
    var_dump($export);
    $fields = mysql_num_fields ( $export );

    for ( $i = 0; $i < $fields; $i++ )
    {
        $header .= mysql_field_name( $export , $i ) . "\t";
    }

    while( $row = mysql_fetch_row( $export ) )
    {
        $line = '';
        foreach( $row as $value )
        {
            if ( ( !isset( $value ) ) || ( $value == "" ) )
            {
                $value = "\t";
            }
            else
            {
                $value = str_replace( '"' , '""' , $value );
                $value = '"' . $value . '"' . "\t";
            }
            $line .= $value;
        }
        $data .= trim( $line ) . "\n";
    }
    $data = str_replace( "\r" , "" , $data );

    if ( $data == "" )
    {
        $data = "\n(0) Données trouvées!\n";
    }

    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=donnees_extraites.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
    print "$header\n$data";

?>
