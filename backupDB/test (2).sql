-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 juil. 2023 à 02:56
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`ID`, `Niveau`, `label`, `responsable`, `promotion`, `nbr_max`) VALUES
(1, 1, 'TP Maternelle 1', NULL, 1, 18),
(2, 1, 'TP Maternelle 2', NULL, 1, 18),
(3, 1, 'TP Maternelle 3', NULL, 1, 18),
(4, 2, 'Petite Maternelle 1', NULL, 1, 18),
(5, 2, 'Petite Maternelle 2', NULL, 1, 18),
(6, 2, 'Petite Maternelle 3', NULL, 1, 18),
(7, 2, 'Petite Maternelle 4', NULL, 1, 18),
(8, 3, 'Moyenne Section 1', NULL, 1, 18),
(9, 3, 'Moyenne Section 2', NULL, 1, 18),
(10, 3, 'Moyenne Section 3', NULL, 1, 18),
(11, 4, 'Grande Section 1', NULL, 1, 18),
(12, 4, 'Grande Section 2', NULL, 1, 18),
(13, 11, 'Première Année Collège 1', NULL, 1, 18),
(14, 11, 'Première Année Collège 2', NULL, 1, 18),
(15, 11, 'Première Année Collège 3', NULL, 1, 18),
(16, 12, 'Deuxième Année Collège 1', NULL, 1, 18),
(17, 12, 'Deuxième Année Collège 2', NULL, 1, 18),
(18, 13, 'Troisième Année Collège 1', NULL, 1, 18),
(19, 13, 'Troisième Année Collège 2', NULL, 1, 18),
(20, 14, 'Première Année Lycée 1', NULL, 1, 18),
(21, 14, 'Première Année Lycée 2', NULL, 1, 18),
(22, 15, 'Deuxième Année Lycée 1', NULL, 1, 18),
(23, 15, 'Deuxième Année Lycée 2', NULL, 1, 18),
(24, 16, 'Troisième Année Lycée 1', NULL, 1, 18),
(25, 16, 'Troisième Année Lycée 2', NULL, 1, 18),
(26, 5, 'CP 1', NULL, 1, 18),
(27, 5, 'CP 2', NULL, 1, 18),
(28, 5, 'CP 3', NULL, 1, 18),
(29, 6, 'CE1 1', NULL, 1, 18),
(30, 6, 'CE1 2', NULL, 1, 18),
(31, 6, 'CE1 3', NULL, 1, 18),
(32, 7, 'CE2 1', NULL, 1, 18),
(33, 7, 'CE2 2', NULL, 1, 18),
(34, 7, 'CE2 3', NULL, 1, 18),
(35, 8, 'CM1 1', NULL, 1, 18),
(36, 8, 'CM1 2', NULL, 1, 18),
(37, 8, 'CM1 3', NULL, 1, 18),
(38, 9, 'CM2 1', NULL, 1, 18),
(39, 9, 'CM2 2', NULL, 1, 18),
(40, 9, 'CM2 3', NULL, 1, 18),
(41, 10, 'CE6 1', NULL, 1, 18),
(42, 10, 'CE6 2', NULL, 1, 18),
(43, 10, 'CE6 3', NULL, 1, 18);

--
-- Déchargement des données de la table `cycles`
--

INSERT INTO `cycles` (`ID`, `label`) VALUES
(1, 'Préscolaire'),
(2, 'Primaire'),
(3, 'Collège'),
(4, 'Lycée');

--
-- Déchargement des données de la table `eleves`
--

INSERT INTO `eleves` (`ID`, `user`, `nameAr`, `surnameAr`, `massar`, `matriculeFamille`) VALUES
(48, 1, NULL, NULL, NULL, NULL),
(49, 14, NULL, NULL, NULL, NULL),
(50, 15, NULL, NULL, NULL, NULL),
(51, 16, NULL, NULL, NULL, NULL),
(52, 17, NULL, NULL, NULL, NULL),
(53, 18, NULL, NULL, NULL, NULL),
(54, 19, NULL, NULL, NULL, NULL),
(55, 20, NULL, NULL, NULL, NULL),
(56, 21, NULL, NULL, NULL, NULL),
(57, 22, NULL, NULL, NULL, NULL),
(58, 23, NULL, NULL, NULL, NULL),
(59, 24, NULL, NULL, NULL, NULL),
(60, 25, NULL, NULL, NULL, NULL),
(61, 26, NULL, NULL, NULL, NULL),
(62, 27, NULL, NULL, NULL, NULL),
(63, 28, NULL, NULL, NULL, NULL),
(64, 29, NULL, NULL, NULL, NULL),
(65, 30, NULL, NULL, NULL, NULL),
(66, 31, NULL, NULL, NULL, NULL),
(67, 32, NULL, NULL, NULL, NULL),
(68, 33, NULL, NULL, NULL, NULL),
(69, 34, NULL, NULL, NULL, NULL),
(70, 35, NULL, NULL, NULL, NULL),
(71, 36, NULL, NULL, NULL, NULL),
(72, 37, NULL, NULL, NULL, NULL),
(73, 38, NULL, NULL, NULL, NULL),
(74, 39, NULL, NULL, NULL, NULL),
(75, 40, NULL, NULL, NULL, NULL),
(76, 41, NULL, NULL, NULL, NULL),
(77, 42, NULL, NULL, NULL, NULL);

--
-- Déchargement des données de la table `enseignants`
--

INSERT INTO `enseignants` (`id`, `date_embauche`, `type_contrat`, `unite`, `user`) VALUES
(1, '2023-07-23', 'CDI', 3, 47);

--
-- Déchargement des données de la table `evaluations`
--

INSERT INTO `evaluations` (`ID`, `date_evaluations`, `matiere`, `classe`, `date_insert`, `typeExam`, `fait`, `notevalidation`, `semestre`, `enseignant`, `planifier_le`, `valide_le`, `valide`, `valideBy`) VALUES
(1, '2023-11-10', 1, 1, '2023-07-23 00:00:00', NULL, 0, 10, 1, 1, NULL, NULL, NULL, NULL),
(2, '2023-01-10', 1, 1, '2023-07-23 00:00:00', NULL, 0, 10, 1, 1, NULL, NULL, NULL, NULL),
(3, '2023-02-10', 1, 1, '2023-07-23 00:00:00', NULL, 0, 10, 2, 1, NULL, NULL, NULL, NULL);

--
-- Déchargement des données de la table `inscriptions`
--

INSERT INTO `inscriptions` (`ID`, `eleve`, `promotion`, `inscriptionBy`, `remise`, `dateInscription`, `redoublant`, `classe`) VALUES
(1, 48, 1, 1, NULL, '2023-07-11', 0, 1),
(2, 49, 1, 1, NULL, '2023-07-11', 0, 2),
(3, 50, 1, 1, NULL, '2023-07-11', 0, 3),
(4, 51, 1, 1, NULL, '2023-07-11', 0, 4),
(5, 52, 1, 1, NULL, '2023-07-11', 0, 5),
(6, 53, 1, 1, NULL, '2023-07-11', 0, 6),
(7, 54, 1, 1, NULL, '2023-07-11', 0, 7),
(8, 55, 1, 1, NULL, '2023-07-11', 0, 8),
(9, 56, 1, 1, NULL, '2023-07-11', 0, 9),
(10, 57, 1, 1, NULL, '2023-07-11', 0, 10),
(11, 58, 1, 1, NULL, '2023-07-11', 0, 11),
(12, 59, 1, 1, NULL, '2023-07-11', 0, 12),
(13, 60, 1, 1, NULL, '2023-07-11', 0, 13),
(14, 61, 1, 1, NULL, '2023-07-11', 0, 14),
(15, 62, 1, 1, NULL, '2023-07-11', 0, 15),
(16, 63, 1, 1, NULL, '2023-07-11', 0, 16),
(17, 64, 1, 1, NULL, '2023-07-11', 0, 17),
(18, 65, 1, 1, NULL, '2023-07-11', 0, 18),
(19, 66, 1, 1, NULL, '2023-07-11', 0, 19),
(20, 67, 1, 1, NULL, '2023-07-11', 0, 20),
(21, 68, 1, 1, NULL, '2023-07-11', 0, 21),
(22, 69, 1, 1, NULL, '2023-07-11', 0, 22),
(23, 70, 1, 1, NULL, '2023-07-11', 0, 23),
(24, 71, 1, 1, NULL, '2023-07-11', 0, 24),
(25, 72, 1, 1, NULL, '2023-07-11', 0, 25),
(26, 73, 1, 1, NULL, '2023-07-11', 0, 26),
(27, 74, 1, 1, NULL, '2023-07-11', 0, 27),
(28, 75, 1, 1, NULL, '2023-07-11', 0, 28),
(29, 76, 1, 1, NULL, '2023-07-11', 0, 29),
(30, 77, 1, 1, NULL, '2023-07-11', 0, 30);

--
-- Déchargement des données de la table `matieres`
--

INSERT INTO `matieres` (`ID`, `label`, `coefficient_ecole`, `coefficient_massar`, `unite`) VALUES
(1, 'Activités orales', 3, 1, 2),
(2, 'Dictée/orthographe', 3, 1, 2),
(3, 'Lecture', 3, 1, 2),
(4, 'Vocabulaire', 3, 1, 2),
(5, 'Production de l’écrit', 3, 1, 2),
(6, 'Ecriture/Copie', 3, 1, 2),
(7, 'Grammaire', 4, 1, 2),
(8, 'Conjugaison', 4, 1, 2),
(9, 'Anglais', 1, 1, 3),
(10, 'Mathématiques', 5, 1, 4),
(11, 'الاداب الاسلامية', 3, 1, 5),
(12, 'القرآن الكريم', 3, 1, 5),
(13, 'العبادات و العقيدة', 3, 1, 5),
(14, 'Physique-Chimie', 5, 1, 7),
(15, 'SC. de la Vie et de la Terre', 5, 1, 8),
(16, 'التاريخ', 1, 1, 9),
(17, 'الجغرافية', 1, 1, 9),
(18, 'التربية المدنية', 1, 1, 9),
(19, 'Informatique', 1, 1, 10),
(20, 'الصرف والتحويل', 1, 1, 1),
(21, 'القراءة والمحفوظة', 1, 1, 1),
(22, 'اللغة العربية', 1, 1, 1);

--
-- Déchargement des données de la table `niveaux`
--

INSERT INTO `niveaux` (`ID`, `Cycle`, `label`) VALUES
(1, 1, 'Toute Petite Section'),
(2, 1, 'Petite section'),
(3, 1, 'Moyenne section'),
(4, 1, 'Grande section'),
(5, 2, 'CP'),
(6, 2, 'CE1'),
(7, 2, 'CE2'),
(8, 2, 'CM1'),
(9, 2, 'CM2'),
(10, 2, 'C6'),
(11, 3, '1ère année collège'),
(12, 3, '2ème année'),
(13, 3, '3ème année'),
(14, 4, 'Tronc commun'),
(15, 4, 'Première année bac'),
(16, 4, 'Deuxième année bac');

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`ID`, `Annee`, `Label`, `Actuelle`, `DateDebut`, `DateFin`) VALUES
(1, '2023', '2022/2023', 1, '2022-09-01', '2023-06-30'),
(2, '2024', '2023/2024', 0, '2023-09-01', '2024-06-30'),
(3, '2022', '2021/2022', 0, '2021-09-01', '2022-06-30');

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`ID`, `alias`) VALUES
(1, 'admin'),
(2, 'parent'),
(3, 'eleve'),
(4, 'professeur'),
(5, 'agent'),
(6, 'educatrice'),
(7, 'resp_financier'),
(8, 'resp_pedago'),
(9, 'agent_plus'),
(10, 'agent_transport'),
(11, 'direction'),
(12, 'assistant_rh'),
(13, 'communication'),
(14, 'encadrant'),
(15, 'agent_financier'),
(16, 'surveillant'),
(17, 'censeur'),
(18, 'assistant_teacher');

--
-- Déchargement des données de la table `unites`
--

INSERT INTO `unites` (`ID`, `label`) VALUES
(1, 'Arabe'),
(2, 'Français'),
(3, 'Anglais'),
(4, 'Mathématiques'),
(5, 'Education islamique'),
(6, 'Education physique'),
(7, 'Physique-Chimie'),
(8, 'Sciences de la vie et de la terre'),
(9, 'Histoire Géographie'),
(10, 'Informatique'),
(11, 'Philosophie'),
(12, 'Eveil scientifique'),
(13, 'Théâtre'),
(14, 'التربية الفنية'),
(15, 'Graphisme');

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID`, `name`, `surname`, `mail`, `password`, `role`, `status`, `created_at`, `updated_at`, `sexe`) VALUES
(1, 'MESBAHI', 'Yassine', 'yassine.mesbahi@gmail.com', '$2y$10$LD1bj2lr2qWnolrRvK6wKOfcAUCdu9PDycmdAEnt6dVERF8yAqQ.q', 1, 0, NULL, NULL, 'H'),
(14, 'AMINE', 'Bouchra', 'AMINE_Bouchra@gmail.com', '$2y$10$qNcfgNk/y5tyo0SAykFVmuph7q8yZ5vz0XmiBXve8jwhLkk2C/eWu', 3, 1, '2023-07-02', NULL, 'H'),
(15, 'ElAURAD', 'Nourddine', 'ElAURAD_Nourddine@gmail.com', '$2y$10$GMogaQqMOpFCrlDSolUWweQb6zaRdtYcx5IRG0yCar6PahST5ibSW', 3, 1, '2023-07-02', NULL, 'H'),
(16, 'BICHA', 'Soukaina', 'BICHA_Soukaina@gmail.com', '$2y$10$/521uyi7Zjm5yW1ePbM9AO0TYN5Zb/G1cYzqqPxrLXBDyosy87e1i', 3, 1, '2023-07-02', NULL, 'F'),
(17, 'ADRAOUI', 'Kawtar', 'ADRAOUI_Kawtar@gmail.com', '$2y$10$qZncMVKV9UMtqyVsRulvseYGfK4MsU98tDTnimCAnmDT.gBYkOXj2', 3, 1, '2023-07-02', NULL, 'F'),
(18, 'Idmansour', 'Fatima', 'Idmansour_Fatima@gmail.com', '$2y$10$W5Qv0l0Jmj2Xgeish4t0UOwoDcwIp4sKjuNwda.g3gq8dg3L8FK1i', 3, 1, '2023-07-02', NULL, 'F'),
(19, 'Jellouli', 'Fadwa', 'Jellouli_Fadwa@gmail.com', '$2y$10$5BuHR4lACPdS3Sf2aQDBo.kLNVZ3V2AOJMmahVYZK/cOVLkrd.xoe', 3, 1, '2023-07-02', NULL, 'F'),
(20, 'Eljably', 'Fouad', 'Eljably_Fouad@gmail.com', '$2y$10$mNscU5e6Y./woqxhvxtJeuF/3XOUApIsq89cSTV3ooKQThZjbnoQ.', 3, 1, '2023-07-02', NULL, 'H'),
(21, 'Sayadi', 'Ayoub', 'Sayadi_Ayoub@gmail.com', '$2y$10$kEzjBkIETR50clIyMzujxuQV/M9dvQoYn.JpHv9LGWGWF4/yj79Au', 3, 1, '2023-07-02', NULL, 'H'),
(22, 'Elmarjani', 'Mohammed', 'Elmarjani_Mohammed@gmail.com', '$2y$10$FDOCa1pH3suRe..dXL1SEeHiwnfC0RBQyJ7P/gUkCemZplv9Yss6u', 3, 1, '2023-07-02', NULL, 'H'),
(23, 'TOUIL', 'Abdelghafour', 'TOUIL_Abdelghafour@gmail.com', '$2y$10$HWbte1w5BbBYYmvSjifCRu6NlUDdJUaSDxu2muS.hx/wJ0dU6CYc2', 3, 1, '2023-07-02', NULL, 'H'),
(24, 'DOMMANE', 'Hafida', 'DOMMANE_Hafida@gmail.com', '$2y$10$qNS4CslPfunDO.ITylWW.OX2ZAUZIBeuVrwGRh8AbnXSprMImnnbS', 3, 1, '2023-07-02', NULL, 'F'),
(25, 'MASTOUR', 'Noureddine', 'MASTOUR_Noureddine@gmail.com', '$2y$10$4c8VZin9dlURpbI8QLwNjecUCU/N6Xlwf8ufBC45a0nzn88Z.qVOe', 3, 1, '2023-07-02', NULL, 'H'),
(26, 'BENNANI', 'Abd ellah', 'BENNANI_Abd ellah@gmail.com', '$2y$10$OoVpgqCwtd4fSxrwSSNpmOueS.j3uXMNDhMNLC2/4/PfY1BnGgXeS', 3, 1, '2023-07-02', NULL, 'H'),
(27, 'ETEBAAI', 'Taoufik', 'ETEBAAI_Taoufik@gmail.com', '$2y$10$qsoXuCiIZnsNURZr9h.FiemclE0F9.nxlyvLnn65fJeSEmYiDog4S', 3, 1, '2023-07-02', NULL, 'H'),
(28, 'EL HAJAMI', 'Awatif', 'EL HAJAMI_Awatif@gmail.com', '$2y$10$AHc.NgxyiEesQmgk12H8WusDsb29EqT.LBf//11F4m4MYnAg.Lopa', 3, 1, '2023-07-02', NULL, 'F'),
(29, 'ABOUQORA', 'Hind', 'ABOUQORA_Hind@gmail.com', '$2y$10$NVMzlAmkg0K2PU2iLFTo.Ok73BJsg0Rw0YDKabIPxJI34JZNiTfKO', 3, 1, '2023-07-02', NULL, 'F'),
(30, 'SAAYDI', 'Mohammed', 'SAAYDI_Mohammed@gmail.com', '$2y$10$PaMJDk5hgEEPouw4sC7.te.iScojPobz.XInrjvMD1KykzULVn84u', 3, 1, '2023-07-02', NULL, 'H'),
(31, 'EZZAKI', 'Nadia', 'EZZAKI_Nadia@gmail.com', '$2y$10$Q631L4g56.nAK8N.pWPUPOWabPKE73KQRzQ4lFj2LzAHmaM1kH3di', 3, 1, '2023-07-02', NULL, 'F'),
(32, 'MOUNTASSIR', 'Noureddine', 'MOUNTASSIR_Noureddine@gmail.com', 'MOUNTASSIR.Noureddine1234', 3, 1, '2023-07-02', NULL, 'H'),
(33, 'MASSIST', 'Rachid', 'MASSIST_Rachid@gmail.com', '$2y$10$Mahmov1dN/uYJyXzTJf.he0ykIT9PL2Pde4rdBk50P7nn7LcdTuUW', 3, 1, '2023-07-02', NULL, 'H'),
(34, 'EL ASRI', 'Sanae', 'ELASRI_Sanae@gmail.com', '$2y$10$2EmsN3fIkoDC7vMlqhorTu4uEToVICP1YJRvF5EQBnxtNENmt/jQG', 3, 1, '2023-07-02', NULL, 'F'),
(35, 'DKHISSI', 'Anouar', 'DKHISSI_Anouar@gmail.com', '$2y$10$KgcO27NJEBwbZqbGk6SSie2q6e38DNxsaQQjtPtlFtc06LQ8h3KLG', 3, 1, '2023-07-02', NULL, 'H'),
(36, 'BANERRADI', 'Asmaa', 'BANERRADI_Asmaa@gmail.com', '$2y$10$dfQAp94/ea9uKJsAV.nF3.Q/0BFRC5A5FlCa04gSW/5MaiSqAUHiu', 3, 1, '2023-07-02', NULL, 'F'),
(37, 'DKHISSI', 'Anouar', 'DKHISSI_Anouar@gmail.com', '$2y$10$ovGRQAvEBDiV8qoV4.no7.FAvsPI/ReWndAC0xLXNU6UQfASSgRcq', 3, 1, '2023-07-02', NULL, 'H'),
(38, 'BANERRADI', 'Asmaa', 'BANERRADI_Asmaa@gmail.com', '$2y$10$lwng0oyT0jAfFrXcC6YfAetFIu7gODfe2565nhRnpnPCyTblRqa.m', 3, 1, '2023-07-02', NULL, 'F'),
(39, 'HAIMOUD', 'Abdellah', 'HAIMOUD_Abdellah@gmail.com', '$2y$10$VUKAghw2Aom.7WxfbhNKL.D6bQGZtD2.NTUvGCILPS6rct881z4pm', 3, 1, '2023-07-02', NULL, 'H'),
(40, 'ASSOUAN', 'Hakima', 'ASSOUAN_Hakima@gmail.com', '$2y$10$DilkcpSMoZErKFMJzXCY7ONewfPk4vvYRJLjhiBRShsssXmKemTdy', 3, 1, '2023-07-02', NULL, 'F'),
(41, 'HAFID', 'Abdessalam', 'HAFID_Abdessalam@gmail.com', '$2y$10$Sughp4GFaXWua5yqUgVHQuouksOhltFTaCWYTTmoVxiQxkRz0QY0m', 3, 1, '2023-07-02', NULL, 'H'),
(42, 'ABID', 'Laila', 'ABID_Laila@gmail.com', '$2y$10$u8YwsNENkwO0P9YBjwtlNOpU1zfaq0BQA28Frrd.wsfOGH./brBTa', 3, 1, '2023-07-02', NULL, 'F'),
(43, 'KHOUBZANE', 'Othmane', 'KHOUBZANE_Othmane@gmail.com', '$2y$10$6E4YarQPy4sGLU0sdrRd.uAogrUtsYJAUdTGXlae5s4FJ3Ipxjigi', 3, 1, '2023-07-02', NULL, 'H'),
(44, 'OUCHEN', 'Hasna', 'OUCHEN_Hasna@gmail.com', '$2y$10$NCZ5w8XlGpXo5hWefpdncej2ugFOqay.r3y8GC4IGUNYGbxJLU.rK', 3, 1, '2023-07-02', NULL, 'F'),
(45, 'BAKRAOUI', 'Redouane', 'BAKRAOUI_Redouane@gmail.com', '$2y$10$8dPjQVRH0N7KeimNQ9DK9ONdVcPWeRWZFYo/PBb8Mt3zy2lN1Sk8m', 3, 1, '2023-07-02', NULL, 'H'),
(46, 'MINAR', 'Yassine', 'MINAR_Yassine@gmail.com', '$2y$10$BXTQogUL9teaUaGmq3qPveVKAc1n2wf/RlPMZsuF6d78cUjSqZxKe', 3, 1, '2023-07-02', NULL, 'H'),
(47, 'ZARYAT', 'Kaoutar', 'ZARYAT_Kaoutar@gmail.com', '$2y$10$8XF7V2zlkxM5GSQR.sz29OapQtmZ1AP02mPo16N2twiDaowh1m4LK', 4, 1, '2023-07-02', NULL, 'F');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
