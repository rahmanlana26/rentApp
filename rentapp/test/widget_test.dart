// This is a basic Flutter widget test.
//
// To perform an interaction with a widget in your test, use the WidgetTester
// utility in the flutter_test package. For example, you can send tap and scroll
// gestures. You can also use WidgetTester to find child widgets in the widget
// tree, read text, and verify that the values of widget properties are correct.

import 'package:flutter_test/flutter_test.dart';

import 'package:rentapp/main.dart';

void main() {
  testWidgets('RentApp shows onboarding and navigates to the car list', (
    WidgetTester tester,
  ) async {
    // Build the app and trigger a frame.
    await tester.pumpWidget(const MyApp());
    await tester.pumpAndSettle();

    // The onboarding screen is shown first.
    expect(find.text('Premium Cars, \nEnjoy the luxury'), findsOneWidget);
    expect(find.text("Let's Go"), findsOneWidget);

    // Tapping the call to action opens the car list screen.
    await tester.tap(find.text("Let's Go"));
    await tester.pumpAndSettle();

    expect(find.text('Chose Your Car'), findsOneWidget);
  });
}
