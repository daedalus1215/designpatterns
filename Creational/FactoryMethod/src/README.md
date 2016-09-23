Factory Method

The good point over the SimpleFactory is you can subclass it to implement different ways to create 
objects. For a simple case, the abstract class could be just an interface.

This pattern is a "real" Design Pattern because it achieves the "Dependency Inversion Principle" 
a.k.a. the "D" in S.O.L.I.D princples.

It means the FactoryMethod class depends on abstractions, not concrete classes. This is the real 
trick compared to SimpleFactory or StaticFactory.