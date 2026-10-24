import 'package:first_flutter/images_asset.dart';
import 'package:flutter/material.dart';

void main (){
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title : 'First App',
      home: Scaffold( 
        backgroundColor: Colors.pinkAccent,
        appBar: AppBar (
          title: Text('Aplikasi fluter saya'),
        backgroundColor: Colors.deepOrange,
        ),
        body: Column(
          children: <Widget>[
            Image.network('https://www.petanikode.com/img/flutter/flutter.png'),
            Text(
              'Belajar Fluter untuk Pemula',
              style: TextStyle(fontSize: 24, fontFamily: "Serif",height: 2.0),
            ),
          Text('oleh maulana'),
          Row(
            mainAxisAlignment: MainAxisAlignment.spaceBetween,
            children: [
              Image.network('https://www.petanikode.com/img/flutter/flutter-sqr.png'),
              const ImageAssetsPage(),
            ],
          )
          ]
        ),
      )
    );
  }
} 