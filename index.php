<?php

namespace frontend\controllers;

/**
 * Class ComplexController
 *
 */
class ComplexController
{ 
	/**
     * Действительная часть комплексного числа
     *
     */
    private $_real;

    /**
     * Мнимая часть комплексного числа
     *
     */
    private $_im;
    
    /**
     * Конструктор ComplexController
     * 
     * @param float $real Действительная часть комплексного числа
     * @param float $im Мнимая часть комплексного числа
     * @return object ComplexController
     */
    public function __construct($real, $im) 
    {
        $this->_real = floatval($real);
        $this->_im = floatval($im);
    }
    
    /**
     * Приведение к строке
     *
     * @return string
     */
    public function toString() 
    {
        $r = $this->getReal();
        $i = $this->getIm();
        $str = $r;
        $str .=  ($i < 0) ? ' - ' : ' + ';
        $str .= abs($i).'i';
        return $str;
    }
	
	/**
	* Операция
	*/
	public function summa(ComplexController $complex) {
		$this->_im += $complex->_im;
		$this->_real += $complex->_real;
	}
	/**
	* Операция
	*/
	public function minus(ComplexController $complex) {
	   $this->_im -= $complex->_im;
	   $this->_real -= $complex->_real;
	}
	/**
	* Операция
	*/
	public function umno(ComplexController $complex) {
	   $this->_im *= $complex->_im;
	   $this->_real *= $complex->_real;
	}
	/**
	* Операция
	*/
	public function delen(ComplexController $complex) {
	   $this->_im /= $complex->_im;
	   $this->_real /= $complex->_real;
	}
	/**
     * Возвращает действительную часть комплексного числа.
     * @return float
     */
    public function getReal() 
    {
        return $this->_real;
    }

    /**
     * Возвращает мнимую часть комплексного числа.
     * @return float
     */
    public function getIm() 
    {
        return $this->_im;
    }
	
	/**
	* Возвращает квадрат величины числа.
	* @return float
	*/
	public function abs2() 
    {
        return ($this->_real * $this->_real + $this->_im * $this->_im);
    }

	/**
	* Возвращает норму числа.
	*
	* @return float
	*/
    public function abs() 
    {
        return sqrt($this->abs2());
    }
}
?>