--
-- PostgreSQL database dump
--

-- Dumped from database version 13.4 (Ubuntu 13.4-1.pgdg20.04+1)
-- Dumped by pg_dump version 13.4 (Ubuntu 13.4-1.pgdg20.04+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: admin_user; Type: TABLE; Schema: public; Owner: bilal_dev
--

CREATE TABLE public.admin_user (
    id integer NOT NULL,
    username character varying(180) NOT NULL,
    roles json NOT NULL,
    password character varying(255) NOT NULL
);


ALTER TABLE public.admin_user OWNER TO bilal_dev;

--
-- Name: admin_user_id_seq; Type: SEQUENCE; Schema: public; Owner: bilal_dev
--

CREATE SEQUENCE public.admin_user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.admin_user_id_seq OWNER TO bilal_dev;

--
-- Name: apprenant; Type: TABLE; Schema: public; Owner: bilal_dev
--

CREATE TABLE public.apprenant (
    id integer NOT NULL,
    pays_id integer NOT NULL,
    niveau_id integer NOT NULL,
    profession_id integer NOT NULL,
    first_name character varying(100) NOT NULL,
    last_name character varying(100) NOT NULL,
    sexe character varying(3) DEFAULT NULL::character varying,
    naissance_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone
);


ALTER TABLE public.apprenant OWNER TO bilal_dev;

--
-- Name: apprenant_id_seq; Type: SEQUENCE; Schema: public; Owner: bilal_dev
--

CREATE SEQUENCE public.apprenant_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.apprenant_id_seq OWNER TO bilal_dev;

--
-- Name: doctrine_migration_versions; Type: TABLE; Schema: public; Owner: bilal_dev
--

CREATE TABLE public.doctrine_migration_versions (
    version character varying(191) NOT NULL,
    executed_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    execution_time integer
);


ALTER TABLE public.doctrine_migration_versions OWNER TO bilal_dev;

--
-- Name: enseigner; Type: TABLE; Schema: public; Owner: bilal_dev
--

CREATE TABLE public.enseigner (
    id integer NOT NULL,
    temoin_id integer NOT NULL,
    poste_id integer NOT NULL,
    start_at timestamp(0) without time zone NOT NULL,
    end_at timestamp(0) without time zone NOT NULL,
    observation text NOT NULL
);


ALTER TABLE public.enseigner OWNER TO bilal_dev;

--
-- Name: enseigner_id_seq; Type: SEQUENCE; Schema: public; Owner: bilal_dev
--

CREATE SEQUENCE public.enseigner_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.enseigner_id_seq OWNER TO bilal_dev;

--
-- Name: niveau_enseignement; Type: TABLE; Schema: public; Owner: bilal_dev
--

CREATE TABLE public.niveau_enseignement (
    id integer NOT NULL,
    libelle character varying(255) NOT NULL
);


ALTER TABLE public.niveau_enseignement OWNER TO bilal_dev;

--
-- Name: niveau_enseignement_id_seq; Type: SEQUENCE; Schema: public; Owner: bilal_dev
--

CREATE SEQUENCE public.niveau_enseignement_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.niveau_enseignement_id_seq OWNER TO bilal_dev;

--
-- Name: participation; Type: TABLE; Schema: public; Owner: bilal_dev
--

CREATE TABLE public.participation (
    id integer NOT NULL,
    temoin_id integer,
    reunion_id integer,
    presence character varying(120) NOT NULL,
    motif_absence text
);


ALTER TABLE public.participation OWNER TO bilal_dev;

--
-- Name: participation_id_seq; Type: SEQUENCE; Schema: public; Owner: bilal_dev
--

CREATE SEQUENCE public.participation_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.participation_id_seq OWNER TO bilal_dev;

--
-- Name: pays; Type: TABLE; Schema: public; Owner: bilal_dev
--

CREATE TABLE public.pays (
    id integer NOT NULL,
    libelle character varying(255) NOT NULL
);


ALTER TABLE public.pays OWNER TO bilal_dev;

--
-- Name: pays_id_seq; Type: SEQUENCE; Schema: public; Owner: bilal_dev
--

CREATE SEQUENCE public.pays_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pays_id_seq OWNER TO bilal_dev;

--
-- Name: postes; Type: TABLE; Schema: public; Owner: bilal_dev
--

CREATE TABLE public.postes (
    id integer NOT NULL,
    post_pays_id integer NOT NULL,
    name character varying(255) NOT NULL,
    adrress character varying(255) DEFAULT NULL::character varying,
    first_day character varying(25) DEFAULT NULL::character varying,
    second_day character varying(25) DEFAULT NULL::character varying,
    created_at date,
    phone_number character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE public.postes OWNER TO bilal_dev;

--
-- Name: postes_id_seq; Type: SEQUENCE; Schema: public; Owner: bilal_dev
--

CREATE SEQUENCE public.postes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.postes_id_seq OWNER TO bilal_dev;

--
-- Name: profession; Type: TABLE; Schema: public; Owner: bilal_dev
--

CREATE TABLE public.profession (
    id integer NOT NULL,
    libelle character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE public.profession OWNER TO bilal_dev;

--
-- Name: profession_id_seq; Type: SEQUENCE; Schema: public; Owner: bilal_dev
--

CREATE SEQUENCE public.profession_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.profession_id_seq OWNER TO bilal_dev;

--
-- Name: reunion; Type: TABLE; Schema: public; Owner: bilal_dev
--

CREATE TABLE public.reunion (
    id integer NOT NULL,
    type character varying(120) NOT NULL,
    reunion_at timestamp(0) without time zone NOT NULL
);


ALTER TABLE public.reunion OWNER TO bilal_dev;

--
-- Name: COLUMN reunion.reunion_at; Type: COMMENT; Schema: public; Owner: bilal_dev
--

COMMENT ON COLUMN public.reunion.reunion_at IS '(DC2Type:datetime_immutable)';


--
-- Name: reunion_id_seq; Type: SEQUENCE; Schema: public; Owner: bilal_dev
--

CREATE SEQUENCE public.reunion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.reunion_id_seq OWNER TO bilal_dev;

--
-- Name: users; Type: TABLE; Schema: public; Owner: bilal_dev
--

CREATE TABLE public.users (
    id integer NOT NULL,
    pays_id integer NOT NULL,
    niveau_id integer NOT NULL,
    profession_id integer,
    first_name character varying(255) NOT NULL,
    last_name character varying(255) NOT NULL,
    sexe character varying(1) NOT NULL,
    naissance_at timestamp(0) without time zone NOT NULL
);


ALTER TABLE public.users OWNER TO bilal_dev;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: bilal_dev
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO bilal_dev;

--
-- Data for Name: admin_user; Type: TABLE DATA; Schema: public; Owner: bilal_dev
--

COPY public.admin_user (id, username, roles, password) FROM stdin;
1	Admin	["ROLE_ADMIN"]	$2y$13$qf6J5FTqTJ5uHSluWhPiKOURKFGjKGZoDkVVkz85vkbADOJI0lnW6
2	roi	["ROLE_ADMIN"]	$2y$13$WdkNbagycvuiQW7SQnKMUeT/7Bi/bJjBAoiq3c5EQOQYucOLFMlzS
\.


--
-- Data for Name: apprenant; Type: TABLE DATA; Schema: public; Owner: bilal_dev
--

COPY public.apprenant (id, pays_id, niveau_id, profession_id, first_name, last_name, sexe, naissance_at) FROM stdin;
\.


--
-- Data for Name: doctrine_migration_versions; Type: TABLE DATA; Schema: public; Owner: bilal_dev
--

COPY public.doctrine_migration_versions (version, executed_at, execution_time) FROM stdin;
DoctrineMigrations\\Version20211029091813	2021-10-29 09:19:49	2532
\.


--
-- Data for Name: enseigner; Type: TABLE DATA; Schema: public; Owner: bilal_dev
--

COPY public.enseigner (id, temoin_id, poste_id, start_at, end_at, observation) FROM stdin;
\.


--
-- Data for Name: niveau_enseignement; Type: TABLE DATA; Schema: public; Owner: bilal_dev
--

COPY public.niveau_enseignement (id, libelle) FROM stdin;
1	Connaissance Générale de l'Evangile(CGE)
2	Connaissance Générale Approfondie de l'Evangile(CGAE)
3	Cours de Base des Disciples (CBD)
4	Cours de Base Approfondi des Disciples (CBAD)
5	Cours de Pré Perfection des Disciples (CPPD)
6	Cours de Perfection des Disciples (CPD)
\.


--
-- Data for Name: participation; Type: TABLE DATA; Schema: public; Owner: bilal_dev
--

COPY public.participation (id, temoin_id, reunion_id, presence, motif_absence) FROM stdin;
\.


--
-- Data for Name: pays; Type: TABLE DATA; Schema: public; Owner: bilal_dev
--

COPY public.pays (id, libelle) FROM stdin;
1	Bénin
2	Togo
3	Cameroun
4	Ghana
5	Canada
6	Nigeria
7	Gabon
8	Senegal
9	Côte d' Ivoire
10	Niger
11	Mali
14	Congo
\.


--
-- Data for Name: postes; Type: TABLE DATA; Schema: public; Owner: bilal_dev
--

COPY public.postes (id, post_pays_id, name, adrress, first_day, second_day, created_at, phone_number) FROM stdin;
1	1	Adjati	\N	\N	\N	2021-09-28	\N
2	1	Agbato	\N	\N	\N	2021-09-28	\N
3	1	Agbodjèdo	\N	\N	\N	2021-09-28	\N
4	1	Agi	\N	\N	\N	2021-09-28	\N
5	1	Aîtouyou	\N	\N	\N	2021-09-28	\N
6	1	Akadjamè	\N	\N	\N	2021-09-28	\N
7	1	Akpadanou	\N	\N	\N	2021-09-28	\N
8	1	Awiandji	\N	\N	\N	2021-09-28	\N
9	1	Calavi-Kpota	\N	\N	\N	2021-09-28	\N
10	1	Dassarie	\N	\N	\N	2021-09-28	\N
11	1	Djaya	\N	\N	\N	2021-09-28	\N
12	1	Djèvali	\N	\N	\N	2021-09-28	\N
13	1	Djougou	\N	\N	\N	2021-09-28	\N
14	1	Djrègbé	\N	\N	\N	2021-09-28	\N
15	1	Ekpè	\N	\N	\N	2021-09-28	\N
16	1	Fidjrossè	\N	\N	\N	2021-09-28	\N
17	1	Gbèglagbè	\N	\N	\N	2021-09-28	\N
18	1	Gbèsa	\N	\N	\N	2021-09-28	\N
19	1	Glo-Agongbé	\N	\N	\N	2021-09-28	\N
20	1	Hêvié	\N	\N	\N	2021-09-28	\N
21	1	Houèto	\N	\N	\N	2021-09-28	\N
22	1	Houin	\N	\N	\N	2021-09-28	\N
23	1	Hounkpontinhoun	\N	\N	\N	2021-09-28	\N
24	1	Kétonou	\N	\N	\N	2021-09-28	\N
25	1	Kétou	\N	\N	\N	2021-09-28	\N
26	1	Kobli	\N	\N	\N	2021-09-28	\N
27	1	Kpodji	\N	\N	\N	2021-09-28	\N
28	1	Kraké	\N	\N	\N	2021-09-28	\N
29	1	Ladji	\N	\N	\N	2021-09-28	\N
30	1	Mahumomey	\N	\N	\N	2021-09-28	\N
31	1	Matéri	\N	\N	\N	2021-09-28	\N
32	1	Missité	\N	\N	\N	2021-09-28	\N
33	1	Natitingou	\N	\N	\N	2021-09-28	\N
34	1	Odomèta	\N	\N	\N	2021-09-28	\N
35	1	Ouanga	\N	\N	\N	2021-09-28	\N
36	1	Oui Seigneuur	\N	\N	\N	2021-09-28	\N
37	1	Pahou	\N	\N	\N	2021-09-28	\N
38	1	Paravie	\N	\N	\N	2021-09-28	\N
39	1	Perma	\N	\N	\N	2021-09-28	\N
40	1	Sètovi	\N	\N	\N	2021-09-28	\N
41	1	So-Aga	\N	\N	\N	2021-09-28	\N
42	1	So-chanwoué	\N	\N	\N	2021-09-28	\N
43	1	Soko	\N	\N	\N	2021-09-28	\N
44	1	Agi	\N	\N	\N	2021-09-28	\N
45	1	Suru-léré	\N	\N	\N	2021-09-28	\N
46	1	Tanguiéta	\N	\N	\N	2021-09-28	\N
47	1	Tanzoun	\N	\N	\N	2021-09-28	\N
48	1	Tchanhounkpamè	\N	\N	\N	2021-09-28	\N
49	1	Togoudo	\N	\N	\N	2021-09-28	\N
50	1	Tohouè	\N	\N	\N	2021-09-28	\N
51	1	Tori-Ayamè	\N	\N	\N	2021-09-28	\N
52	1	Toume-sega	\N	\N	\N	2021-09-28	\N
53	1	Zogbohouè	\N	\N	\N	2021-09-28	\N
\.


--
-- Data for Name: profession; Type: TABLE DATA; Schema: public; Owner: bilal_dev
--

COPY public.profession (id, libelle) FROM stdin;
\.


--
-- Data for Name: reunion; Type: TABLE DATA; Schema: public; Owner: bilal_dev
--

COPY public.reunion (id, type, reunion_at) FROM stdin;
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: bilal_dev
--

COPY public.users (id, pays_id, niveau_id, profession_id, first_name, last_name, sexe, naissance_at) FROM stdin;
\.


--
-- Name: admin_user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bilal_dev
--

SELECT pg_catalog.setval('public.admin_user_id_seq', 1, false);


--
-- Name: apprenant_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bilal_dev
--

SELECT pg_catalog.setval('public.apprenant_id_seq', 1, false);


--
-- Name: enseigner_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bilal_dev
--

SELECT pg_catalog.setval('public.enseigner_id_seq', 1, false);


--
-- Name: niveau_enseignement_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bilal_dev
--

SELECT pg_catalog.setval('public.niveau_enseignement_id_seq', 1, false);


--
-- Name: participation_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bilal_dev
--

SELECT pg_catalog.setval('public.participation_id_seq', 1, false);


--
-- Name: pays_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bilal_dev
--

SELECT pg_catalog.setval('public.pays_id_seq', 1, false);


--
-- Name: postes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bilal_dev
--

SELECT pg_catalog.setval('public.postes_id_seq', 1, false);


--
-- Name: profession_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bilal_dev
--

SELECT pg_catalog.setval('public.profession_id_seq', 1, false);


--
-- Name: reunion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bilal_dev
--

SELECT pg_catalog.setval('public.reunion_id_seq', 1, false);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bilal_dev
--

SELECT pg_catalog.setval('public.users_id_seq', 1, false);


--
-- Name: admin_user admin_user_pkey; Type: CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.admin_user
    ADD CONSTRAINT admin_user_pkey PRIMARY KEY (id);


--
-- Name: apprenant apprenant_pkey; Type: CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.apprenant
    ADD CONSTRAINT apprenant_pkey PRIMARY KEY (id);


--
-- Name: doctrine_migration_versions doctrine_migration_versions_pkey; Type: CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.doctrine_migration_versions
    ADD CONSTRAINT doctrine_migration_versions_pkey PRIMARY KEY (version);


--
-- Name: enseigner enseigner_pkey; Type: CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.enseigner
    ADD CONSTRAINT enseigner_pkey PRIMARY KEY (id);


--
-- Name: niveau_enseignement niveau_enseignement_pkey; Type: CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.niveau_enseignement
    ADD CONSTRAINT niveau_enseignement_pkey PRIMARY KEY (id);


--
-- Name: participation participation_pkey; Type: CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.participation
    ADD CONSTRAINT participation_pkey PRIMARY KEY (id);


--
-- Name: pays pays_pkey; Type: CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.pays
    ADD CONSTRAINT pays_pkey PRIMARY KEY (id);


--
-- Name: postes postes_pkey; Type: CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.postes
    ADD CONSTRAINT postes_pkey PRIMARY KEY (id);


--
-- Name: profession profession_pkey; Type: CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.profession
    ADD CONSTRAINT profession_pkey PRIMARY KEY (id);


--
-- Name: reunion reunion_pkey; Type: CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.reunion
    ADD CONSTRAINT reunion_pkey PRIMARY KEY (id);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: idx_1483a5e9a6e44244; Type: INDEX; Schema: public; Owner: bilal_dev
--

CREATE INDEX idx_1483a5e9a6e44244 ON public.users USING btree (pays_id);


--
-- Name: idx_1483a5e9b3e9c81; Type: INDEX; Schema: public; Owner: bilal_dev
--

CREATE INDEX idx_1483a5e9b3e9c81 ON public.users USING btree (niveau_id);


--
-- Name: idx_1483a5e9fdef8996; Type: INDEX; Schema: public; Owner: bilal_dev
--

CREATE INDEX idx_1483a5e9fdef8996 ON public.users USING btree (profession_id);


--
-- Name: idx_5a763c649b0cf577; Type: INDEX; Schema: public; Owner: bilal_dev
--

CREATE INDEX idx_5a763c649b0cf577 ON public.postes USING btree (post_pays_id);


--
-- Name: idx_663e85cd1655312c; Type: INDEX; Schema: public; Owner: bilal_dev
--

CREATE INDEX idx_663e85cd1655312c ON public.enseigner USING btree (temoin_id);


--
-- Name: idx_663e85cda0905086; Type: INDEX; Schema: public; Owner: bilal_dev
--

CREATE INDEX idx_663e85cda0905086 ON public.enseigner USING btree (poste_id);


--
-- Name: idx_ab55e24f1655312c; Type: INDEX; Schema: public; Owner: bilal_dev
--

CREATE INDEX idx_ab55e24f1655312c ON public.participation USING btree (temoin_id);


--
-- Name: idx_ab55e24f4e9b7368; Type: INDEX; Schema: public; Owner: bilal_dev
--

CREATE INDEX idx_ab55e24f4e9b7368 ON public.participation USING btree (reunion_id);


--
-- Name: idx_c4eb462ea6e44244; Type: INDEX; Schema: public; Owner: bilal_dev
--

CREATE INDEX idx_c4eb462ea6e44244 ON public.apprenant USING btree (pays_id);


--
-- Name: idx_c4eb462eb3e9c81; Type: INDEX; Schema: public; Owner: bilal_dev
--

CREATE INDEX idx_c4eb462eb3e9c81 ON public.apprenant USING btree (niveau_id);


--
-- Name: idx_c4eb462efdef8996; Type: INDEX; Schema: public; Owner: bilal_dev
--

CREATE INDEX idx_c4eb462efdef8996 ON public.apprenant USING btree (profession_id);


--
-- Name: uniq_ad8a54a9f85e0677; Type: INDEX; Schema: public; Owner: bilal_dev
--

CREATE UNIQUE INDEX uniq_ad8a54a9f85e0677 ON public.admin_user USING btree (username);


--
-- Name: users fk_1483a5e9a6e44244; Type: FK CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT fk_1483a5e9a6e44244 FOREIGN KEY (pays_id) REFERENCES public.pays(id);


--
-- Name: users fk_1483a5e9b3e9c81; Type: FK CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT fk_1483a5e9b3e9c81 FOREIGN KEY (niveau_id) REFERENCES public.niveau_enseignement(id);


--
-- Name: users fk_1483a5e9fdef8996; Type: FK CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT fk_1483a5e9fdef8996 FOREIGN KEY (profession_id) REFERENCES public.profession(id);


--
-- Name: postes fk_5a763c649b0cf577; Type: FK CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.postes
    ADD CONSTRAINT fk_5a763c649b0cf577 FOREIGN KEY (post_pays_id) REFERENCES public.pays(id);


--
-- Name: enseigner fk_663e85cd1655312c; Type: FK CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.enseigner
    ADD CONSTRAINT fk_663e85cd1655312c FOREIGN KEY (temoin_id) REFERENCES public.users(id);


--
-- Name: enseigner fk_663e85cda0905086; Type: FK CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.enseigner
    ADD CONSTRAINT fk_663e85cda0905086 FOREIGN KEY (poste_id) REFERENCES public.postes(id);


--
-- Name: participation fk_ab55e24f1655312c; Type: FK CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.participation
    ADD CONSTRAINT fk_ab55e24f1655312c FOREIGN KEY (temoin_id) REFERENCES public.users(id);


--
-- Name: participation fk_ab55e24f4e9b7368; Type: FK CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.participation
    ADD CONSTRAINT fk_ab55e24f4e9b7368 FOREIGN KEY (reunion_id) REFERENCES public.reunion(id);


--
-- Name: apprenant fk_c4eb462ea6e44244; Type: FK CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.apprenant
    ADD CONSTRAINT fk_c4eb462ea6e44244 FOREIGN KEY (pays_id) REFERENCES public.pays(id);


--
-- Name: apprenant fk_c4eb462eb3e9c81; Type: FK CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.apprenant
    ADD CONSTRAINT fk_c4eb462eb3e9c81 FOREIGN KEY (niveau_id) REFERENCES public.niveau_enseignement(id);


--
-- Name: apprenant fk_c4eb462efdef8996; Type: FK CONSTRAINT; Schema: public; Owner: bilal_dev
--

ALTER TABLE ONLY public.apprenant
    ADD CONSTRAINT fk_c4eb462efdef8996 FOREIGN KEY (profession_id) REFERENCES public.profession(id);


--
-- PostgreSQL database dump complete
--

