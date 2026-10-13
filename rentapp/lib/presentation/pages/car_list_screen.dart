import 'package:flutter/material.dart';
import 'package:rentapp/data/models/Car.dart';
import 'package:rentapp/presentation/widgets/car_card.dart';

class CarListScreen extends StatelessWidget {
  final List<Car> cars = [
    Car(model: 'Car 1', distance: 1000, FuelCapacity: 50, PricePerHour: 20),
    Car(model: 'Car 2', distance: 2000, FuelCapacity: 60, PricePerHour: 30),
    Car(model: 'Car 3', distance: 3000, FuelCapacity: 70, PricePerHour: 40),
  ];

  CarListScreen({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Chose Your Car'),
        backgroundColor: Colors.white,
        foregroundColor: Colors.black,
      ),
      body: ListView.builder(
        itemCount: cars.length,
        itemBuilder: (context, index) {
          return CarCard(car: cars[index]);
        },
      ),
    );
  }
}
