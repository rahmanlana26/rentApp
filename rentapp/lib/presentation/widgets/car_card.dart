import 'package:flutter/material.dart';
import 'package:rentapp/data/models/Car.dart';
import 'package:rentapp/presentation/pages/car_details_page.dart';

class CarCard extends StatelessWidget {
  final Car car;
  const CarCard({super.key, required this.car});

  @override
  Widget build(BuildContext context) {
    return GestureDetector(
      onTap: () {
        Navigator.push(
          context,
          MaterialPageRoute(builder: (context) => CardDetailsPage(car: car)),
        );
        // Handle card tap, e.g., navigate to details page
      },
      child: Container(
        margin: EdgeInsets.symmetric(horizontal: 20, vertical: 10),
        padding: EdgeInsets.all(20),
        decoration: BoxDecoration(
          color: Color(0xffF3F3F3),
          borderRadius: BorderRadius.circular(20),
          boxShadow: [
            BoxShadow(color: Colors.black12, blurRadius: 10, spreadRadius: 5),
          ],
        ),
        child: Column(
          children: [
            Image.asset("assets/car_image.png", height: 120),
            Text(
              car.model,
              style: TextStyle(fontSize: 20, fontWeight: FontWeight.bold),
            ),
            SizedBox(height: 10),
            Row(
              mainAxisAlignment: MainAxisAlignment.spaceBetween,
              children: [
                Row(
                  children: [
                    Image.asset("assets/gps.png"),
                    Text('${car.distance.toStringAsFixed(0)} km'),
                  ],
                ),
                Row(
                  children: [
                    Image.asset("assets/pump.png"),
                    Text('${car.FuelCapacity.toStringAsFixed(0)}L'),
                  ],
                ),
                Text(
                  '\$${car.PricePerHour.toStringAsFixed(2)}/h',
                  style: TextStyle(fontSize: 16),
                ),
              ],
            ),
          ],
        ),
      ),
    );
  }
}
