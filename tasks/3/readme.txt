Написать PHP класс, который реализует структуру данных Дек, максимальный размер которого определяется заданным числом в момент создания экземпляра класса.
В классе должны быть реализованы методы:


pushBack(value) - добавить элемент в конец дека. Если в деке уже находится максимальное число элементов, вернуть false.

pushFront(value) - добавить элемент в начало дека. Если в деке уже находится максимальное число элементов, вернуть false.

popBack() - вывести первый элемент дека и удалить его. Если дек был пуст, вернуть false.

popFront() вывести последний элемент дека и удалить его. Если дек был пуст, вернуть false.

Внимание: все операции должны выполняться за O(1), при реализации используйте кольцевой буфер.