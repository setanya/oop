<?php
class Helper
{
    private $sumAr = [];//свойство = массив чисел

    /**возвращает сумму чисел в $sumAr
     * @return float|int
     */
    public function getSum()
    {
      return  array_sum($this->sumAr);//слажить числа массива $sumAr = []
    }

    /**добавляет значение к массиву
     * @param $s
     * @return $this
     */
    public function setSum($s)
    {// только если число
        if(is_int($s)){         //$helper->setSum(9);
            $this->sumAr[] = $s;//$helper->setSum(19);
        }
        //возвращает ссылку на свой объект (сам на себя) Для построения цепочеки
        return $this;//$helper->setSum(3)->setSum(9);
    }
}
$helper = new Helper();
$helper->setSum(1)->setSum(5)->setSum(1);//работает только с (return $this;)
$helper->setSum(5);//работает без (return $this;)
$helper->setSum(3);//работает без (return $this;)
$helper->setSum(s);

echo $helper->getSum();