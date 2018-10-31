#include <EmonLib.h>

EnergyMonitor emon1;                   // Create an instance

void setup()
{  
  Serial.begin(9600);
  
  emon1.current(1, 21);             // Current: input pin, calibration.
  emon1.voltage(5, 637.75, 1.7);  // Voltage: input pin, calibration, phase_shift

}

void loop()
{
  double Irms = emon1.calcIrms(1480);  // Calculate Irms only
  emon1.calcVI(20,2000);         // Calculate all. No.of half wavelengths (crossings), time-out

  Serial.print("Irms: ");
  Serial.println(emon1.Irms);
  Serial.print("Vrms: ");
  Serial.println(emon1.Vrms);
  Serial.print("Power: ");
  Serial.println(Irms*emon1.Vrms);         // Apparent power
  Serial.println();
  delay(2000);
}
