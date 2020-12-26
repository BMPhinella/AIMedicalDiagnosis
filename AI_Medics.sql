-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 26, 2020 at 09:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AI_Medics`
--

-- --------------------------------------------------------

--
-- Table structure for table `AgeGroup`
--

CREATE TABLE `AgeGroup` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `age` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `AgeGroupTreatment`
--

CREATE TABLE `AgeGroupTreatment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ageGroup_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `treatment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Appointments`
--

CREATE TABLE `Appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medical_practitioner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ClinicFindings`
--

CREATE TABLE `ClinicFindings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(255) NOT NULL,
  `symptoms` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` int(10) DEFAULT NULL,
  `diagnosis` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ClinicFindings`
--

INSERT INTO `ClinicFindings` (`id`, `patient_id`, `symptoms`, `percentage`, `diagnosis`, `updated_by`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(61, 21, 'Hypertension,Dry itchy skin,sclerodatyly', 43, 'there is a 43 % chance of Renal tubulopathy -- diabetes mellitus -- cerebellar ataxia', NULL, NULL, NULL, '2020-12-15 19:01:39', '2020-12-15 19:01:39'),
(62, 21, 'Hypertension,Dry itchy skin,sclerodatyly', 43, 'there is a 43 % chance of Renal tubulopathy -- diabetes mellitus -- cerebellar ataxia', NULL, NULL, NULL, '2020-12-15 19:10:37', '2020-12-15 19:10:37'),
(63, 23, 'Hypertension,Bed wetting,Irritability,Malaise,Thrush,Persistent fungal skin infections,Retarded fetal growth,bruits,thyroid enlargement,Bone loss', 43, 'Renal tubulopathy -- diabetes mellitus -- cerebellar ataxia', NULL, NULL, NULL, '2020-12-16 05:05:09', '2020-12-16 05:05:09'),
(64, 22, 'Hypertension', 2, 'Type 2 diabetes', NULL, NULL, NULL, '2020-12-16 06:49:23', '2020-12-16 06:49:23'),
(65, 22, 'Hypertension', 43, 'Renal tubulopathy -- diabetes mellitus -- cerebellar ataxia', NULL, NULL, NULL, '2020-12-16 07:04:14', '2020-12-16 07:04:14'),
(66, 22, 'Hypertension', 43, 'Renal tubulopathy -- diabetes mellitus -- cerebellar ataxia', NULL, NULL, NULL, '2020-12-16 07:11:48', '2020-12-16 07:11:48'),
(67, 22, 'Hypertension', 43, 'Renal tubulopathy -- diabetes mellitus -- cerebellar ataxia', NULL, NULL, NULL, '2020-12-16 07:13:25', '2020-12-16 07:13:25'),
(68, 22, 'Hypertension', 43, 'Renal tubulopathy -- diabetes mellitus -- cerebellar ataxia', NULL, NULL, NULL, '2020-12-16 07:15:40', '2020-12-16 07:15:40'),
(69, 22, 'Hypertension', 43, 'Renal tubulopathy -- diabetes mellitus -- cerebellar ataxia', NULL, NULL, NULL, '2020-12-16 07:30:24', '2020-12-16 07:30:24'),
(70, 20, 'Coma,Poor healing,granuloma annulare', 6, 'Type 2 diabetes', NULL, NULL, NULL, '2020-12-16 07:38:43', '2020-12-16 07:38:43'),
(71, 21, 'Coma,Bed wetting,Malaise,Hypothyroidism', 43, 'there is a 43 % chance of Renal tubulopathy -- diabetes mellitus -- cerebellar ataxia', NULL, NULL, NULL, '2020-12-16 07:40:03', '2020-12-16 07:40:03'),
(72, 22, 'Coma,Bed wetting,Irritability,Dry itchy skin,sclerodatyly,wasting of testicles', 43, 'Renal tubulopathy -- diabetes mellitus -- cerebellar ataxia', NULL, NULL, NULL, '2020-12-16 10:37:47', '2020-12-16 10:37:47'),
(73, 23, 'Depression,Loss of tooth enamel,hyperglycemic hyperosmolar nonketotic syndrome (hhns),Persistent fungal skin infections,Skin ulcers,dry mouth,Retarded fetal growth,gonadal insufficiency,Etiology,Hyperchloremia,Blurred vision,Proximal renal tubulopathy,Type one dibetes,Cerebellar ataxia,Dermatitis herpetiformis,Bone loss', 43, 'Renal tubulopathy -- diabetes mellitus -- cerebellar ataxia', NULL, NULL, NULL, '2020-12-16 10:50:05', '2020-12-16 10:50:05'),
(74, 20, 'Sexual Problems,Muscle weakness,Malaise,Muscle aches,Poor healing,Delayed puberty,Dry itchy skin,Thrush,Peripheral neuropathies,hhns', 6, 'Type 2 diabetes', NULL, NULL, NULL, '2020-12-16 10:55:52', '2020-12-16 10:55:52'),
(75, 20, 'Hypertension,Abdominal pain,Muscle weakness,Skin infections,sclerodatyly,vitiligo', 18, 'Diabetes insipidus, diabetes mellitus, optic atrophy', NULL, NULL, NULL, '2020-12-16 11:38:17', '2020-12-16 11:38:17'),
(76, 21, 'Sexual Problems,Irritability', 4, 'there is a 43 % chance of Renal tubulopathy -- diabetes mellitus -- cerebellar ataxia', NULL, NULL, NULL, '2020-12-17 05:14:50', '2020-12-17 05:14:50'),
(77, 22, 'Hypertension,Irritability,wasting of testicles', NULL, NULL, NULL, NULL, NULL, '2020-12-18 03:30:41', '2020-12-18 03:30:41'),
(78, 21, 'Coma,Vaginal dryness,Malaise,Dry itchy skin,dry mouth,bruits,xanthelasma,Cerebellar ataxia', 25, 'there is a 43 % chance of Renal tubulopathy -- diabetes mellitus -- cerebellar ataxia', NULL, NULL, NULL, '2020-12-18 03:54:04', '2020-12-18 03:54:04'),
(79, 23, 'Muscle aches,Loss of tooth enamel,Abscesses,hyperglycemic hyperosmolar nonketotic syndrome (hhns),Retarded fetal growth,Cerebellar ataxia,Bone loss', NULL, NULL, NULL, NULL, NULL, '2020-12-18 04:04:16', '2020-12-18 04:04:16'),
(80, 23, 'Irritability,Malaise,Poor skin healing,Dry itchy skin,Thrush,hhns,sclerodatyly,wasting of testicles', 18, 'Type 2 diabetes', NULL, NULL, NULL, '2020-12-18 04:06:47', '2020-12-18 04:06:47'),
(81, 22, 'Absence of menstruation,Abdominal pain,Skin infections,Breathing difficulties,wasting of testicles,bullae,pigmentation', 15, 'Type 2 diabetes', NULL, NULL, NULL, '2020-12-18 04:10:44', '2020-12-18 04:10:44'),
(82, 23, 'Bed wetting,Irritability,Muscle weakness,Poor skin healing,Thrush,hhns,bullae', NULL, NULL, NULL, NULL, NULL, '2020-12-18 07:07:51', '2020-12-18 07:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `Diseases`
--

CREATE TABLE `Diseases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `DiseasesClinicFindings`
--

CREATE TABLE `DiseasesClinicFindings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `disease_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clinic_findings_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_by` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `DiseasesManagement`
--

CREATE TABLE `DiseasesManagement` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `disease_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `management_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `DiseasesTreatment`
--

CREATE TABLE `DiseasesTreatment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `disease_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `treatment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_by` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Management`
--

CREATE TABLE `Management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Management`
--

INSERT INTO `Management` (`id`, `name`, `updated_by`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 'Eat a balanced diet and Exercise quite often', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `MedicalPractitioners`
--

CREATE TABLE `MedicalPractitioners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_No` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_13_121617_Patients', 1),
(5, '2020_03_19_124326_diseases', 1),
(6, '2020_03_31_090502_clinicFindings', 1),
(7, '2020_03_31_164240_medical_practioners', 1),
(8, '2020_03_31_183342_permissions', 1),
(9, '2020_03_31_202240_roles', 1),
(10, '2020_04_01_061537_age_group', 1),
(22, '2020_04_01_113012_treatment', 2),
(23, '2020_04_03_134522_age_group_treatment', 2),
(24, '2020_04_03_145454_diseases_management', 2),
(25, '2020_04_03_153205_diseases_clinicFindings', 2),
(26, '2020_04_03_161313_diseases_treatment', 2),
(27, '2020_04_03_163508_patients_diseases', 2),
(28, '2020_04_03_173142_patients_clinicfindings', 2),
(29, '2020_04_03_181702_management', 2),
(30, '2020_10_10_082136_visits', 2),
(31, '2020_10_10_082212_appointments', 2),
(32, '2020_11_09_132948_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(6, 'App\\User', 11),
(7, 'App\\User', 12),
(8, 'App\\User', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Patients`
--

CREATE TABLE `Patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kin_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Patients`
--

INSERT INTO `Patients` (`id`, `first_name`, `last_name`, `other_name`, `name`, `age`, `gender`, `phone_number`, `address`, `kin`, `kin_contact`, `updated_by`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(20, 'Ray', 'Giita', 'Kevin', 'Ray Giita Kevin', 29, 'Male', '0756412396', 'Nalya', 'Atwiine', '0796321215', NULL, 1, NULL, '2020-12-13 09:50:25', '2020-12-13 09:50:25'),
(21, 'Tina', 'Tania', 'Kamukama', 'Tina Tania Kamukama', 24, 'Female', '075693214', 'Kasangati', 'Natalie Siima', '0756412321', NULL, 1, NULL, '2020-12-13 09:53:03', '2020-12-13 09:53:03'),
(22, 'Gloria', 'Umutoni', NULL, 'Gloria Umutoni ', 23, 'Female', '0756412396', 'Ndeebba', 'Steve', '0742695412', NULL, 1, NULL, '2020-12-13 09:54:12', '2020-12-13 09:54:12'),
(23, 'Gelian', 'Agaba', 'Ubumanzi', 'Gelian Agaba Ubumanzi', 29, 'Female', '0759352149', 'Kisasi', 'Agaba Clive', '0725631420', NULL, 1, NULL, '2020-12-13 22:41:38', '2020-12-13 22:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `PatientsClinicFindings`
--

CREATE TABLE `PatientsClinicFindings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clinic_findings_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `PatientsDiseases`
--

CREATE TABLE `PatientsDiseases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disease_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Permissions`
--

CREATE TABLE `Permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permissions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(17, 'create_patient', 'web', '2020-12-14 03:14:14', '2020-12-14 03:14:14'),
(18, 'create_visits', 'web', '2020-12-14 03:14:14', '2020-12-14 03:14:14'),
(19, 'create_appointments', 'web', '2020-12-14 03:14:14', '2020-12-14 03:14:14'),
(20, 'create_clinic_findings', 'web', '2020-12-14 03:14:14', '2020-12-14 03:14:14'),
(21, 'read_patient', 'web', '2020-12-14 03:14:14', '2020-12-14 03:14:14'),
(22, 'read_visits', 'web', '2020-12-14 03:14:14', '2020-12-14 03:14:14'),
(23, 'read_appointments', 'web', '2020-12-14 03:14:14', '2020-12-14 03:14:14'),
(24, 'read_clinic_findings', 'web', '2020-12-14 03:14:15', '2020-12-14 03:14:15'),
(25, 'change_patient', 'web', '2020-12-14 03:14:15', '2020-12-14 03:14:15'),
(26, 'change_visits', 'web', '2020-12-14 03:14:15', '2020-12-14 03:14:15'),
(27, 'change_appointmets', 'web', '2020-12-14 03:14:15', '2020-12-14 03:14:15'),
(28, 'change_clinic_findings', 'web', '2020-12-14 03:14:15', '2020-12-14 03:14:15'),
(29, 'delete_patient', 'web', '2020-12-14 03:14:15', '2020-12-14 03:14:15'),
(30, 'delete_visits', 'web', '2020-12-14 03:14:15', '2020-12-14 03:14:15'),
(31, 'delete_appointments', 'web', '2020-12-14 03:14:15', '2020-12-14 03:14:15'),
(32, 'delete_clinic_findings', 'web', '2020-12-14 03:14:15', '2020-12-14 03:14:15');

-- --------------------------------------------------------

--
-- Table structure for table `Roles`
--

CREATE TABLE `Roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(6, 'Admin', 'web', '2020-12-14 03:14:11', '2020-12-14 03:14:11'),
(7, 'Doctor', 'web', '2020-12-14 03:14:13', '2020-12-14 03:14:13'),
(8, 'Nurse', 'web', '2020-12-14 03:14:13', '2020-12-14 03:14:13'),
(9, 'Trainee', 'web', '2020-12-14 03:14:13', '2020-12-14 03:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(17, 7),
(17, 8),
(17, 9),
(18, 7),
(18, 8),
(18, 9),
(19, 7),
(19, 8),
(19, 9),
(20, 7),
(20, 8),
(20, 9),
(21, 7),
(21, 8),
(21, 9),
(22, 7),
(22, 8),
(22, 9),
(23, 7),
(23, 8),
(23, 9),
(24, 7),
(24, 8),
(24, 9),
(25, 7),
(25, 8),
(26, 7),
(26, 8),
(27, 7),
(27, 8),
(28, 7),
(28, 8),
(29, 7),
(30, 7),
(31, 7),
(32, 7);

-- --------------------------------------------------------

--
-- Table structure for table `Treatment`
--

CREATE TABLE `Treatment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Treatment`
--

INSERT INTO `Treatment` (`id`, `name`, `updated_by`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 'Oral antidiabetic drugs or Injected therapies depending on a number of facts', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `contact`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Best Mugisa', '', 'bubu0@gmail.com', NULL, NULL, '$2y$10$C6/2NnZU1v51hIDZf9Zgf..804niPes.5vuJuq6KmaPrcekQIruQK', NULL, '2020-12-08 09:43:06', '2020-12-08 09:43:06'),
(11, 'Admin', '', 'admin@admin.com', NULL, NULL, '$2y$10$zJfAn0bTTbgxOf23EBoBH.yws7WyPWaZjQOFeC6eEJE/UJbgaNNhu', NULL, '2020-12-14 03:14:13', '2020-12-14 03:14:13'),
(12, 'Best Mugisa', '', 'mugisabest1@gmail.com', '0772170613', NULL, '$2y$10$dxta65C0V3a3YeVaoFZzju6DWHXKbvuni2y5QIQ71JQDApT1bPKdC', NULL, '2020-12-14 03:28:33', '2020-12-14 03:28:33'),
(13, 'Akankwasa Melvin', NULL, 'melvo@gmail.com', '0726359412', NULL, '$2y$10$97/IBnHTj/EOaxEC0I.g3uEiBuMZ3QILEpcIylcG83xRKvgAXUoWu', NULL, '2020-12-17 04:27:33', '2020-12-17 04:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `Visits`
--

CREATE TABLE `Visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visit_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_visit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Visits`
--

INSERT INTO `Visits` (`id`, `patient_name`, `visit_date`, `visit_category`, `next_visit`, `updated_by`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, 'Ray Giita Kevin', '2020-12-15', 'Self Request', '2020-12-18', NULL, 1, NULL, '2020-12-13 10:28:37', '2020-12-13 10:32:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AgeGroup`
--
ALTER TABLE `AgeGroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AgeGroupTreatment`
--
ALTER TABLE `AgeGroupTreatment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Appointments`
--
ALTER TABLE `Appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ClinicFindings`
--
ALTER TABLE `ClinicFindings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Diseases`
--
ALTER TABLE `Diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DiseasesClinicFindings`
--
ALTER TABLE `DiseasesClinicFindings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DiseasesManagement`
--
ALTER TABLE `DiseasesManagement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DiseasesTreatment`
--
ALTER TABLE `DiseasesTreatment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Management`
--
ALTER TABLE `Management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `MedicalPractitioners`
--
ALTER TABLE `MedicalPractitioners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `Patients`
--
ALTER TABLE `Patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `PatientsClinicFindings`
--
ALTER TABLE `PatientsClinicFindings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `PatientsDiseases`
--
ALTER TABLE `PatientsDiseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Permissions`
--
ALTER TABLE `Permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Roles`
--
ALTER TABLE `Roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `Treatment`
--
ALTER TABLE `Treatment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `Visits`
--
ALTER TABLE `Visits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `AgeGroup`
--
ALTER TABLE `AgeGroup`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `AgeGroupTreatment`
--
ALTER TABLE `AgeGroupTreatment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Appointments`
--
ALTER TABLE `Appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ClinicFindings`
--
ALTER TABLE `ClinicFindings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `Diseases`
--
ALTER TABLE `Diseases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `DiseasesClinicFindings`
--
ALTER TABLE `DiseasesClinicFindings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `DiseasesManagement`
--
ALTER TABLE `DiseasesManagement`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `DiseasesTreatment`
--
ALTER TABLE `DiseasesTreatment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Management`
--
ALTER TABLE `Management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `MedicalPractitioners`
--
ALTER TABLE `MedicalPractitioners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `Patients`
--
ALTER TABLE `Patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `PatientsClinicFindings`
--
ALTER TABLE `PatientsClinicFindings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `PatientsDiseases`
--
ALTER TABLE `PatientsDiseases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Permissions`
--
ALTER TABLE `Permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `Roles`
--
ALTER TABLE `Roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Treatment`
--
ALTER TABLE `Treatment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Visits`
--
ALTER TABLE `Visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
