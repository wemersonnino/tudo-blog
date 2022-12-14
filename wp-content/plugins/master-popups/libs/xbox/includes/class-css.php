<?php namespace Xbox\Includes;

class CSS {
    public $props = array();
    public $selector = null;

    /*
    |---------------------------------------------------------------------------------------------------
    | Constructor
    |---------------------------------------------------------------------------------------------------
    */
    public function __construct( $selector = null ){
        $this->selector = $selector;
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Agrega una propiedad css
    |---------------------------------------------------------------------------------------------------
    */
    public function merge_props( $arr ){
        $this->props = array_merge( $this->props, $arr );
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Agrega una propiedad css o devuelve el valor de una propiedad
    |---------------------------------------------------------------------------------------------------
    */
    public function prop( $name, $value = null ){
        if( $value !== '' && $value != null ) {
            $this->props[$name] = $value;
            return true;
        }
        return isset( $this->props[$name] ) ? $this->props[$name] : null;
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Elimina una propiedad css
    |---------------------------------------------------------------------------------------------------
    */
    public function remove_prop( $name ){
        if( isset( $this->props[$name] ) ){
            unset( $this->props[$name] );
            return true;
        }
        return false;
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Elimina una propiedad css
    |---------------------------------------------------------------------------------------------------
    */
    public function remove_props( $props = array() ){
        foreach( $props as $prop ){
            $this->remove_prop( $prop );
        }
        return $this->props;
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Compila un array css (propiedad => valor) y devuelve css en string
    |---------------------------------------------------------------------------------------------------
    */
    public function build_css( $css = array(), $media_query = '' ){
        $style = $this->get_inline_style( $css );
        if( $this->selector && ! empty( $style ) ){
            if( $media_query != '' ){
                return $media_query. '{ '.$this->selector . '{ ' . $style . '} }'."\n";
            } else {
                return $this->selector . '{ ' . $style . '}'."\n";
            }
        }
        return $style;
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Devuelve string css
    |---------------------------------------------------------------------------------------------------
    */
    public function get_inline_style( $css = array() ){
        $style = '';
        if( empty( $css ) || ! is_array( $css ) ){
            $css = $this->props;
        }
        foreach( $css as $prop => $value ){
            $style .= "{$prop}:{$value}; ";
        }
        return $style;
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Devuelve la propiedad $this->props
    |---------------------------------------------------------------------------------------------------
    */
    public function get_props(){
        return $this->props;
    }


    /*
    |---------------------------------------------------------------------------------------------------
    | Retorna un n??mero v??lido
    |---------------------------------------------------------------------------------------------------
    */
    public static function number( $value, $unit = '' ){
        if( in_array( $value, array( 'auto', 'initial', 'inherit', 'normal' ), true ) ){
            return $value;
        }
        if( ! is_numeric( $value ) ){
            return '0px';
        }
        $value = preg_replace( "/[^0-9.\-]/", "", $value );
        if( is_numeric( $value ) ){
            return $value . $unit;
        }
        return '0px';
    }

}

