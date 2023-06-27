//1 
object HealthInHarmony {
  def main(args: Array[String]): Unit = { 
    println(" Welcome to Health in Harmony!") 
  } 
}

//2
import scala.collection.mutable.ListBuffer

//3
class PersonalInformation {
  private var name: String = _
  private var age: Int = _
  private var gender: String = _
  private var contactNumber: Long = _

  def setName(name: String): Unit = {
    this.name = name
  }

  def getName(): String = name

  def setAge(age: Int): Unit = {
    this.age = age
  }

  def getAge(): Int = age

  def setGender(gender: String): Unit = {
    this.gender = gender
  }

  def getGender(): String = gender

  def setContactNumber(contactNumber: Long): Unit = {
    this.contactNumber = contactNumber
  }

  def getContactNumber(): Long = contactNumber

}

//4
class MedicalRecord(var patientId: Int, var medicalHistory: ListBuffer[String]) 

//5
object MedicalRecordHandler {
  def addMedicalRecord(medicalRecord: MedicalRecord): Unit = {
    println("Medical record added...")
  }

  def updateMedicalRecord(medicalRecord: MedicalRecord): Unit = {
    println("Medical record updated...")
  }

  def deleteMedicalRecord(medicalRecord: MedicalRecord): Unit = {
    println("Medical record deleted")
  }
}

//6
class Appointment {
  private var appointmentDate: String = _
  private var doctorName: String = _

  def setAppointmentDate(appointmentDate: String): Unit = {
    this.appointmentDate = appointmentDate
  }

  def getAppointmentDate(): String = appointmentDate

  def setDoctorName(doctorName: String): Unit = {
    this.doctorName = doctorName
  }

  def getDoctorName(): String = doctorName

}

//7 
object AppointmentHandler {
  def createAppointment(appointment: Appointment): Unit = {
    println("Appointment created...")
  }

  def deleteAppointment(appointment: Appointment): Unit = {
    println("Appointment cancelled...")
  }
}

//8
class TestResult {
  private var testName: String = _
  private var testResult: String = _
  private var testDate: String = _

  def setTestName(testName: String): Unit = {
    this.testName = testName
  }

  def getTestName(): String = testName

  def setTestResult(testResult: String): Unit = {
    this.testResult = testResult
  }

  def getTestResult(): String = testResult

  def setTestDate(testDate: String): Unit = {
    this.testDate = testDate
  }

  def getTestDate(): String = testDate

}

//9
object TestResultHandler {
  def addTestResult(testResult: TestResult): Unit = {
    println("Test result added...")
  }

  def updateTestResult(testResult: TestResult): Unit = {
    println("Test result updated...")
  }

  def deleteTestResult(testResult: TestResult): Unit = {
    println("Test result deleted...")
  }
}

//10
class Prescription {
  private var prescriptionDate: String = _
  private var medicineName: String = _
  private var dose: String = _
  private var duration: Int = _

  def setPrescriptionDate(prescriptionDate: String): Unit = {
    this.prescriptionDate = prescriptionDate
  }

  def getPrescriptionDate(): String = prescriptionDate

  def setMedicineName(medicineName: String): Unit = {
    this.medicineName = medicineName
  }

  def getMedicineName(): String = medicineName

  def setDose(dose: String): Unit = {
    this.dose = dose
  }

  def getDose(): String = dose

  def setDuration(duration: Int): Unit = {
    this.duration = duration
  }

  def getDuration(): Int = duration
}

//11
object PrescriptionHandler {
  def createPrescription(prescription: Prescription): Unit = {
    println("Prescription created...")
  }

  def deletePrescription(prescription: Prescription): Unit = {
    println("Prescription cancelled...")
  }
}

//12
class Billing {
  private var totalAmount: Int = _
  private var paymentMode: String = _

  def setTotalAmount(totalAmount: Int): Unit = {
    this.totalAmount = totalAmount
  }

  def getTotalAmount(): Int = totalAmount

  def setPaymentMode(paymentMode: String): Unit = {
    this.paymentMode = paymentMode
  }

  def getPaymentMode(): String = paymentMode
}

//13
object BillingHandler {
  def calculateTotalAmount(billing: Billing): Unit = {
    println("Total amount calculated...")
  }

  def printBill(billing: Billing): Unit = {
    println("Bill printed...")
  }
}

//14
class Doctor {
  private var name: String = _
  private var contactNumber: Long = _
  private var specialization: String = _

  def setName(name: String): Unit = {
    this.name = name
  }

  def getName(): String = name

  def setContactNumber(contactNumber: Long): Unit = {
    this.contactNumber = contactNumber
  }

  def getContactNumber(): Long = contactNumber

  def setSpecialization(specialization: String): Unit = {
    this.specialization = specialization
  }

  def getSpecialization(): String = specialization

}

//15
object DoctorHandler {
  def addDoctor(doctor: Doctor): Unit = {
    println("Doctor added...")
  }

  def updateDoctor(doctor: Doctor): Unit = {
    println("Doctor updated...")
  }

  def deleteDoctor(doctor: Doctor): Unit = {
    println("Doctor deleted...")
  }
}

//16
class Patient {
  private var name: String = _
  private var contactNumber: Long = _
  private var medicalRecord: MedicalRecord = _

  def setName(name: String): Unit = {
    this.name = name
  }

  def getName(): String = name

  def setContactNumber(contactNumber: Long): Unit = {
    this.contactNumber = contactNumber
  }

  def getContactNumber(): Long = contactNumber

  def setMedicalRecord(medicalRecord: MedicalRecord): Unit = {
    this.medicalRecord = medicalRecord
  }

  def getMedicalRecord(): MedicalRecord = medicalRecord
}

//17
object PatientHandler {
  def addPatient(patient: Patient): Unit = {
    println("Patient added...")
  }

  def updatePatient(patient: Patient): Unit = {
    println("Patient updated...")
  }

  def deletePatient(patient: Patient): Unit = {
    println("Patient deleted...")
  }
}

//18
class Hospital {
  private var name: String = _
  private var address: String = _
  private var contactNumber: Long = _

  def setName(name: String): Unit = {
    this.name = name
  }

  def getName(): String = name

  def setAddress(address: String): Unit = {
    this.address = address
  }

  def getAddress(): String = address

  def setContactNumber(contactNumber: Long): Unit = {
    this.contactNumber = contactNumber
  }

  def getContactNumber(): Long = contactNumber

}

//19
object HospitalHandler {
  def addHospital(hospital: Hospital): Unit = {
    println("Hospital added...")
  }

  def updateHospital(hospital: Hospital): Unit = {
    println("Hospital updated...")
  }

  def deleteHospital(hospital: Hospital): Unit = {
    println("Hospital deleted...")
  }
}

//20
class Pharmacy {
  private var name: String = _
  private var address: String = _
  private var contactNumber: Long = _

  def setName(name: String): Unit = {
    this.name = name
  }

  def getName(): String = name

  def setAddress(address: String): Unit = {
    this.address = address
  }

  def getAddress(): String = address

  def setContactNumber(contactNumber: Long): Unit = {
    this.contactNumber = contactNumber
  }

  def getContactNumber(): Long = contactNumber

}

//21
object PharmacyHandler {
  def addPharmacy(pharmacy: Pharmacy): Unit = {
    println("Pharmacy added...")
  }

  def updatePharmacy(pharmacy: Pharmacy): Unit = {
    println("Pharmacy updated...")
  }

  def deletePharmacy(pharmacy: Pharmacy): Unit = {
    println("Pharmacy deleted...")
  }
}

//22
class userInterface {
  def showMenu(): Unit = {
    println("1. Personal Information\n2. Medical Record\n3. Appointment\n4. Test Result\n5. Prescription\n6. Billing\n7. Doctor\n8. Patient\n9. Hospital\n10. Pharmacy")
  }

  def selectOption(optionNo: Int): Unit = {
    optionNo match {
      case 1 => println("Personal Information Section")
      case 2 => println("Medical Record Section")
      case 3 => println("Appointment Section")
      case 4 => println("Test Result Section")
      case 5 => println("Prescription Section")
      case 6 => println("Billing Section")
      case 7 => println("Doctor Section")
      case 8 => println("Patient Section")
      case 9 => println("Hospital Section")
      case 10 => println("Pharmacy Section")

      case _ => println("Invalid option")
    }
  }
}

//23
object HealthInHarmony {
  def main(args: Array[String]): Unit = { 
    println(" Welcome to Health in Harmony!") 
    
    var userInterface = new userInterface
    userInterface.showMenu()
    userInterface.selectOption(scala.io.StdIn.readLine("Please select the option: ").toInt)
  } 
}