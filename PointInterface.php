<?php


interface PointInterface //метод интерфейса  склад методов
{
    /**
     * Число pi
     */
    const PI = 3.14;//$ у константы не пишется
    /**
     * вычисляет площадь фигура
     * у интерфейса метода публичные
     * @return mixed
     */
     public function area();//

    /**
     * вычисляют периметр фигуры
     * @return mixed
     */

     public function perimeter();
}