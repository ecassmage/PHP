CREATE TABLE Treatment(
    id INT,
    is_drug INT NOT NULL CHECK(is_drug = 1 OR is_drug = 0),
    name VARCHAR(30) NOT NULL,
    cost FLOAT NOT NULL DEFAULT 0,

    PRIMARY KEY (id),
    UNIQUE (name)
);

CREATE TABLE Disease(
    id INT,
    name VARCHAR(30) NOT NULL,
    treatment_id INT NOT NULL,

    PRIMARY KEY (id),
    UNIQUE(name),
    FOREIGN KEY (treatment_id) REFERENCES Treatment(id)
);

CREATE TABLE Hospital(
    id INT,
    name VARCHAR(50) NOT NULL,
    location VARCHAR(50) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE (name)
);

CREATE TABLE Doctor(
    id CHAR(7),
    name VARCHAR(30) NOT NULL,
    hospital_id INT NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (hospital_id) REFERENCES Hospital(id)
);

CREATE TABLE Nurse(
    id CHAR(7),
    name VARCHAR(30) NOT NULL,
    hospital_id INT NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (hospital_id) REFERENCES Hospital(id)
);

CREATE TABLE Patient(
    id CHAR(15),
    name VARCHAR(30) NOT NULL,
    disease INT NOT NULL,
    arrival_date DATE NOT NULL,
    phone_number VARCHAR(10) NOT NULL,
    gender CHAR(1) NOT NULL,
    age INT NOT NULL,
    height INT NOT NULL,
    primary_doctor CHAR(7) NOT NULL,
    hospital_id INT NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY(primary_doctor) 	REFERENCES Doctor(id),
    FOREIGN KEY(disease) 		REFERENCES Disease(id),
    FOREIGN KEY(hospital_id) 		REFERENCES Hospital(id)
);

CREATE TABLE Pharmacy(
    id INT,
    name VARCHAR(30) NOT NULL,

    PRIMARY KEY (id),
    UNIQUE(name)
);

CREATE TABLE PatientAddress(
    address_number	INT			    NOT NULL,
    street_name		VARCHAR(30)	    NOT NULL,
	postal_code		VARCHAR(6)		NOT NULL,
    province_state	CHAR(2)		    NOT NULL,
    country		    CHAR(3)		    NOT NULL,
	patient_id 		CHAR(15)		NOT NULL,

 	PRIMARY KEY(street_name, postal_code, province_state, country, patient_id),
    FOREIGN KEY(patient_id) 		REFERENCES Patient(id)
);

CREATE TABLE Attending_Doctor(
    patient_id CHAR(15) NOT NULL,
    doctor_id CHAR(7) NOT NULL,

    PRIMARY KEY (patient_id, doctor_id),
    FOREIGN KEY (patient_id) REFERENCES Patient(id),
    FOREIGN KEY (doctor_id) REFERENCES Doctor(id)
);

CREATE TABLE Attending_Nurse(
    patient_id CHAR(15) NOT NULL,
    nurse_id CHAR(7) NOT NULL,

    PRIMARY KEY (patient_id, nurse_id),
    FOREIGN KEY (patient_id) REFERENCES Patient(id),
    FOREIGN KEY (nurse_id) REFERENCES Nurse(id)
);

CREATE TABLE Bill(
    id INT,
    patient_id CHAR(15) NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (patient_id) REFERENCES Patient(id)
);

CREATE TABLE Bill_Instance(
    bill_id INT NOT NULL,
    treatment_id INT NOT NULL,

    PRIMARY KEY (bill_id, treatment_id),
    FOREIGN KEY (bill_id) REFERENCES Bill(id),
    FOREIGN KEY (treatment_id) REFERENCES Treatment(id)
);