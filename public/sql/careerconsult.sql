-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Dec 08, 2014 at 10:40 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `careerconsult`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) NOT NULL,
  `title` varchar(5000) NOT NULL,
  `photo_path` varchar(1000) NOT NULL,
  `content` text NOT NULL,
  `avatar` varchar(1000) NOT NULL,
  `editor` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `topic_id`, `title`, `photo_path`, `content`, `avatar`, `editor`, `date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Find out what you enjoy', 'successImage.png', 'Success comes in all shapes and colours. You can be successful in your job and career but you can equally be successful in your marriage, at sports or a hobby. Whatever success you are after there is one thing all radically successful people have in common: Their ferocious drive and hunger for success makes them never give up. Successful people (or the people talking or writing about them) often paint a picture of the perfect ascent to success. In fact, some of the most successful people in business, entertainment and sport have failed. Many have failed numerous times but they have never given up. Successful people are able to pick themselves up, dust themselves off and carry on trying. I have collected some examples that should be an inspiration to anyone who aspires to be successful. They show that if you want to succeed you should expect failure along the way. I actually believe that failure can spur you on and make you try even harder. You could argue that every experience of failure increases the hunger for success. The truly successful won''t be beaten, they take responsibility for failure, learn from it and start all over from a stronger position.', 'KarynsProfilePic.png', 'Karyn McDonald', '2014-11-12', '2014-11-18 08:40:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 'Follow-up Steps after the Interview', 'followup.png', '1. Set the stage for effective follow-up. The first strategy is to have a structured follow-up system in the first place (which most candidates do NOT). You should have a plan in place before you even get to the interview! This way, you’ll be able to “put the wheels in motion” immediately, and you won’t have to think about it! This step alone will relieve the pressure and decrease your anxiety. Plus, you’ll feel prepared, pro-active and more in control. Developing your follow-up strategy BEFORE the interview will even enhance your behavior DURING the interview.\r\n2. Act more like a consultant than an applicant. When you’re at the interview, don’t spend all your time trying to “sell” yourself. Focus instead on asking intelligent, probing questions about the employer’s business needs, problems and concerns (like a good consultant would). These questions should be based on the preparation and study you’ve done beforehand. Write-down the interviewer’s answers, which will become the foundation for your follow-up steps. Whenever possible, give specific examples (Accomplishment Stories) from your work history that are directly relevant to the interviewer’s stated challenges.\r\n3. Don’t rush toward an offer. Offers for professional-level job offers are almost NEVER made at the first interview. So, don’t rush the process! The purpose of your initial interview is not to get an offer, but to get invited back for a second meeting – most likely with a higher-level individual at the company. Use every interview to ask more questions and uncover the employer’s primary needs and problems. The more of these challenges you uncover, the better prepared you will be to submit your “proposal for service” at the appropriate time.\r\n4. Confirm next steps. At the end of each meeting, be sure to plan and confirm next steps. Remember, an interview (or ANY meeting, for that matter) is only as good as the follow-up actions that it generates. Don’t settle for “We’ll let you know” or similar comments that place you in a passive position. Assume a more active role, and get a commitment from the employer for “what comes next!”\r\n5. Follow-up promptly and compellingly. Now that your interview is over, be sure to send your thank-you letters as soon as possible. These should be personalized to each individual (not generic), and must include specific references to each person with whom you met (something they said or contributed). Be sure your correspondence is as professional and clear as it can be, whether via e-mail or “snail mail.” If you promised to send the employer additional documents or information, do so promptly.\r\n6. Use every follow-up contact as a chance to build your value. After the interview, carefully review your notes, which highlight the company’s most pressing needs, problems and challenges. Identify specific areas where you have successfully addressed similar issues in your career. In your thank-you letter, include brief synopses of these accomplishments, tying them directly to the company’s stated challenges (usually in a side-by-side chart format). You can even support your “claims” by sending the employer actual samples of your work. Most companies want employees who are true problem-solvers, so this will prove that “you have what it takes” and that you can bring your special value to this organization.\r\n7. Be punctual and persistent. It shouldn’t even be necessary to mention this “strategy,” but some candidates sabotage their chances for the offer by arriving late to the interview, or by “dropping the ball” in the middle of the process. So, always call when you say you’re going to call and do what you say you’re going to do! Be meticulous in your business etiquette, which includes consistent, regular follow-ups by phone and e-mail. Be persistent in expressing your sincere interest in the opportunity, but don’t be a pest.\r\n8. Leverage outside resources. If you have contacts and connections with anyone who might influence the hiring decision, or who actually knows the interviewer, ask them to “put in a good word for you” after the initial interview. But do this advisedly – this can be a sensitive or highly-political matter at times. At the very least, send the employer some letters of recommendation, written by respected professionals in your business community.\r\n9. Accept rejection gracefully. Assuming you’ve done everything you can reasonably do to win the offer, you must accept whatever decision the employer makes. If you get the message (directly or indirectly) that the company is not interested in you, or if they actually reject you, then all you can do is move on. You can’t “force” the interviewer to make you an offer, no matter how “perfect” you may have thought the job was for you.\r\n10. Turn defeat into victory. After being rejected, the first thing you should do (ironically) is to send a thank-you letter. You can really distinguish yourself from the other rejected applicants if you send this sort of polite, professional letter “after the fact.” Express your sincere appreciation for having been considered for the position, and wish the new employee every success. State that you would be happy to be considered for the position again, should the selected candidate not work-out for any reason. (You would be surprised how many times the “new hire” does NOT work-out). When the employer needs to find a quick replacement, there will be a high likelihood that YOU will be at the top of their list. In some cases, the employer may even be so impressed with your grace and professionalism, that they will offer you a different position at the company as soon as a vacancy occurs! If you genuinely liked the company, stay in touch with them over the long-term. Other opportunities will open-up, so make it easy for the employer to contact and eventually hire you.\r\nBy employing these follow-up strategies after the interview, you will improve your chances of getting more offers, and you will also feel more empowered and effective throughout the hiring process!', 'KarynsProfilePic.png', 'Karyn McDonald', '2014-11-29', '2014-11-18 08:40:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 'Careers advice: Get networked, sooner the better', 'newtonz.png', 'As a skilled migrant the government has accepted your qualifications and experience as being "what New Zealand needs" so it must be very frustrating not to find work quickly. Although your work history gives you specialist experience in the oil and gas industry your experience in contaminated land management, compliance and waste management should be transferable to similar industries.\r\n\r\nHaving established networks is an issue here in New Zealand as our approach to doing business and efficacy in our working roles is very dependent on the relationships we have and how well known we are. Therefore the sooner you make inroads into the industry networks the better. This can happen by attending industry events (I see there is an Oil and Gas Industry Expo in early August in New Plymouth), presentations at university or other related interest groups and having an excellent LinkedIn profile.\r\n\r\nWithout knowing how you are approaching your job search or seeing your CV and application letters it is difficult to advise what you could be doing that you may not be.\r\n\r\nIt''s important to get leverage from your transferable experience by highlighting in your CV the projects you have worked on. These should describe in real terms what you can offer a prospective employer. Also I hope that you are open to doing short term contract work as usually this is the best way to get NZ experience.\r\n\r\nOther resources you can access (if you haven''t already) are:\r\n\r\n* The Omega Mentoring programme for migrants\r\n\r\n* Energy Stream website\r\n\r\n* Specialists job search website\r\n\r\nThe key messages I want to give you are: Get networked, get seen, and get in the know of what is happening in New Zealand, and that short term experience, well done, is most likely to bring long term success - and hopefully permanent residency status.', 'avatar-2.jpg', 'Ingrid Sands', '2014-12-11', '2014-11-18 08:49:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 4, 'How to Return to the Workforce at Any Age', 'returntotheworkforce.png', '1. Hit the ground running.\r\n\r\nWhen times are tough, employers don''t want to take risks. Businesses are looking for individuals who can have an immediate effect. Be prepared to demonstrate to a prospective employer how you can help the company now. Offering references and success stories from your past that show you get the job done will facilitate finding a job quickly. This is not a good time to consider a career change. Going back to doing what you have done successfully in the past is the best return-to-work strategy.\r\n\r\n2. Connect with those you don''t have to convince.\r\n\r\nTry contacting former supervisors. They know you and the quality of your work. They may even have a position available. If not, you can use the opportunity to update them on what you have been doing since you left and what you are looking for. Hopefully, they will be willing to serve as a reference and offer you some possible contacts.\r\n\r\n3. Highlight your time off.\r\n\r\nIt is also important to demonstrate that you have put your time at home to good use in terms that a potential employer will value. Those resume gaps can be highlighted if you engaged in activities that will further your career, such as blogging, joining organizations or volunteering. Taking courses online or at a local college will also make you more marketable.\r\n\r\n4. Be up-to-date with technology.\r\n\r\nA gap in employment history prompts hiring managers to wonder whether you''ve kept up with advancements while you were out. Prepare to demonstrate, not only that you are current with the technology needed to do the job but also that you are comfortable with learning new technology. Having a professional presence on the Internet, (a personal Web page, a blog, articles published on the Internet or a profile posted on a professional networking Web site) and being able to talk about trends in technology that are relevant to the job will eliminate any doubts about your ability to adapt to rapidly changing technology.\r\n\r\nThe keys to a successful re-entry into the workforce are creativity in your approach and confidence in the value of your skills. Don''t apologize for taking time off; speak with confidence about the reasons why you took time off and why you are seeking to go back to work now.\r\n\r\n5. Exhibit confidence.\r\n\r\nOnce you have found an employer that wants to hire you, don''t be afraid to negotiate.\r\n\r\nThe only difference when it comes to negotiating successfully when you are employed versus when you are returning to work is confidence. The skills and experience that made you valuable when you were employed are just as valuable when you return to the workforce.\r\n\r\nEmployers don''t hire employees because they are cheap. They hire them because they want them. If you can convince an employer to hire you, they will be willing to pay you what you are worth if you know how to negotiate. Ask, don''t threaten, and wait until the employer is ready to offer you the position before negotiating. Know what individuals in the industry with your skills and experience earn.\r\n\r\nDon''t specifically make accepting the offer contingent on getting what you are requesting. Instead, ask for help and leave the possibility open that you might take the job even if they cannot satisfy your request. Use phrases like, "I am really excited about the job but was hoping that the salary would be more in line with what I believe is the market for the skills I bring to the table."\r\n\r\n6. Inquire about training.\r\n\r\nPut hiring managers'' minds at ease by letting them know that you''re determined to stay up to date. Two things that should be high on your list are training and ensuring that you are given the tools for success. Training is critical to your continued success.\r\n\r\nGetting a commitment to be allowed to avail yourself of in-house training opportunities and on-the-job training is normally relatively easy to do before you are hired, and requests of this nature are usually well received. Similarly, candidates who talk about what they will need in terms of resources such as budget, staff and equipment reflect foresight. Their reasonable requests are usually granted, whereas once you start in a position resources are harder to come by.\r\n\r\n7. Don''t be pushy.\r\n\r\nOn the other hand, if you are returning to work in a full-time position, generally it is a good idea not to try to telecommute, at least not initially. Most employers, even in good times, are much more likely to allow these perks employees they trust to work independently and who have a track record of producing results for them.\r\n\r\nCareer Advice from TheLadders\r\nPositioning Your Career\r\nMinimize Wait Time During Your Job Search\r\n5 Mistakes That Can Kill Your Job Search\r\nWise Words for Great Jobs\r\nAsking to telecommute may cause a prospective employer to have second thoughts about your commitment to the job. You can also raise the issue of telecommuting later on, after you have proven yourself. The same is true about limitations on the hours you can work. If you show that you can get the job done, then your employer is likely to be flexible in terms of the specific hours you work.\r\n\r\nDemonstrate that you have kept your skills current. Be prepared to show, with specific examples and strong personal recommendations, that you can get things done. Those qualities will not only get you a job but will allow you to negotiate the terms of your return to work.\r\n\r\nYour skills, enthusiasm, preparation, persistence, strong work ethic and can-do attitude did not disappear when you took time off from work for your family. Those qualities were valued by your previous employers, and they remain extremely valuable in a challenging economic environment.', 'avatar-3.jpg', 'Lee Miller', '2014-11-17', '2014-11-18 08:49:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 5, 'The big CV', 'CV.png', 'Job seekers that only ever add to their CV are the equivalent of hoarders. Afraid to lose any aspect of their past that might be valuable to a future employer, the hoarder’s CV may be 4 or more pages in length. The hoarder forgets that employers are only really interested in what you have been doing most recently. Employers are very unlikely to ask questions at interview about jobs carried out more than 10 years ago.\r\n \r\nThe first thing to do when revisiting your CV is to give yourself space to work with. Two pages should do it. A two page CV is perfect for even the most seasoned professional. It focuses the mind and encourages you to distil information and include only what is most important. Do not be tempted to try and cheat by reducing the point size. A time strung employer will not be grateful to you for forcing them to squint when reading your CV.\r\nWithin your career history section focus on jobs carried out in the last 5 years or so. Certainly anything further back than 10 years can be summarised. Briefly describe the organisation, briefly describe the role then wax lyrical about your achievements. Use facts and figures and concrete examples of achievements. This is the most important information in your CV and will ultimately decide on whether you get called to interview.', 'avatar-6.jpg', 'Lee Jamie King', '2014-12-15', '2014-11-18 08:51:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` varchar(5000) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `price`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'FREE', '<li>15 minute free consultation either over telephone, email or meeting up.</li>', '2014-12-08 19:21:42', '2014-12-03 11:35:29', '0000-00-00 00:00:00'),
(2, '$30', '<li>30 minute appointment.</li>\n<li>Cover a range of services\nSign up, and prepare your Career Profile for a consultation.</li>\n<li>CV Design.</li>\n<li>Meet up in Ponsonby.</li>', '2014-12-08 19:22:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '$40', '<li>45 minute appointment.</li>\n<li>Have a service tailored to your needs\nSign up, and prepare your Career Profile for a consultation.</li>\n<li>Prepare your CV and Interview Questions.</li>\n<li>Meet in CBD</li>', '2014-12-08 19:22:58', '2014-12-03 11:26:29', '0000-00-00 00:00:00'),
(4, '$50', '<li>1 hour appointment\nAppointments are generally face to face.</li>\n<li>Some services can be completed by email or  Skype.</li>\n<li>Prepare your CV and Interview Questions.</li>\n<li>Meet up of your choice.</li>', '2014-12-08 19:23:35', '2014-12-03 11:20:08', '0000-00-00 00:00:00'),
(5, '$25', '<li>Independent advice.</li>\n<li>Focus on new employment contract.</li>\n<li>Service can be tailored via email.</li>', '2014-12-08 19:24:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'TBC', '<li>Other services, as discussed.</li>\n<li>Inquire about a service.</li>\n<li>Contact us via email or phone.</li>', '2014-12-08 19:24:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(5000) NOT NULL,
  `service_type` varchar(5000) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `service_type`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'file.png', 'CV Writing & Cover Letters', '<li>Choose from a number CV templates & assistance in creating a CV.</li>\n<li>Receive honest critique about your existing CV and / or cover letter.</li>\n<li>How to tailor your CV and cover letter to a specific job.</li>\n<li>Tips to help you ‘get that interview’.</li>', '2014-12-01 00:20:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'comments.png', 'Interview Preparation', '<li>Learn about the types of questions asked and how to effectively answer these.</li>\n<li>Complete a ‘mock interview’ to practice your approach & gain confidence.</li>\n<li>Useful tips to impress your interviewers and stand out from the crowd.</li>\n<li>Graduates: what to expect when attending a graduate programme interview.</li>', '2014-12-01 00:21:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'aeroplane.png', 'New to NZ', '<li>NZ workplace culture – what to expect and how to adapt your approach.</li>\n<li>Comprehensive spelling and grammar support for your CV and cover letter.</li>\n<li>Options for job searching in NZ.</li>', '2014-12-01 00:21:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'zipfile.png', 'Employment Contracts', '<li>Independent advice on an employment contract before you sign it.</li>', '2014-12-01 00:20:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'users.png', 'General Job Seeking Advice', '<li>Effective on-line job searching.</li>\n<li>Understand recruitment agencies and how to get the best out of them.</li>\n<li>Create an effective LinkedIn profile.</li>\n<li>Understand the realities of the job market.</li>', '2014-12-01 00:20:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'thumbsup.png', 'General Employment Advice', '<li>Ask questions about your employment situation and your rights.</li>\n<li>Coaching for approaching difficult situations at work.</li>\n<li>Advice and / or support person in disciplinary meetings.</li>', '2014-12-01 00:20:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `avatar` varchar(5000) NOT NULL,
  `client` varchar(5000) NOT NULL,
  `company` varchar(5000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `content`, `avatar`, `client`, `company`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Integrity, professionalism and dedication are three words that come to mind when I think of Career Consult. Over the past few years Career Consult have consistently provided  excellent temporary and permanent people to join our team. The consultants are true business partners and we look forward to continuing our relationship with this team. \n', 'avatar-5.jpg', 'Mark Daniels ', 'WHK Gosling Chapman', '2014-12-04 00:09:33', '2014-12-03 11:09:21', '0000-00-00 00:00:00'),
(2, 'I''m impressed by Karyn at Career Consult, her commitment to providing a quality service, achieved through taking the time to understand our my needs as a client has helped me secure a job, Thank you.', 'avatar-4.jpg', 'Kirsty Rutledge-Malyon', 'NavMan, Google Optimisation Manger', '2014-11-27 23:17:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'There is just a small handful of people I have met throughout my years that have made a profound impact on my life – and career consult tops my list! Karyn''s experience, professionalism, insight, coaching and guidance have not only helped me secure my dream job, but have helped me in all other facets of my life. Karyn was there for me every step of the way, and I could not have done it without her. When I hear folks complaining about the job search process, I know they haven’t met Career Consult!', 'avatar-1.jpg', 'John Tee', 'The real web people', '2014-11-18 09:12:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Career Consult is the consummate professional. Karyn is not only a natural-born teacher and coach, she provides an excellent model for how someone at the top of his/her field should look, sound, and relate to others. Working with Karyn has been a truly life-changing experience. I wish I had more space to tell the story of how she helped me turn over a new leaf with my career!', 'avatar-6.jpg', 'Jamie Lee', 'ASB Finance Manager', '2014-11-18 09:12:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Trying things out', '2014-11-18 08:27:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Tips', '2014-11-18 08:27:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'New to NZ', '2014-11-18 08:27:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Returning to the workforce', '2014-11-18 08:27:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Cv Advice', '2014-11-18 08:27:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(50000) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `avatar` varchar(5000) NOT NULL,
  `personal_goal` text NOT NULL,
  `experience` text NOT NULL,
  `education` text NOT NULL,
  `acheivement` text NOT NULL,
  `career_history` text NOT NULL,
  `career_type` text NOT NULL,
  `service_type` varchar(5000) NOT NULL,
  `comment` text NOT NULL,
  `remember_token` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `phone`, `avatar`, `personal_goal`, `experience`, `education`, `acheivement`, `career_history`, `career_type`, `service_type`, `comment`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `admin`) VALUES
(1, 'kaz', '$2y$10$rNEdxaLROwHoXfVInAnXTusr.7/GVhhQ19WNao1nAK64qn8.0d3.y', 'Karyn', 'McDonald', 'karynmcdonald@hotmail.com', '021 123 4567', 'KarynsProfilePic.png', '', '', '', '', '', '', '', '', 'LCcwPqJh7W4gp5xScndrB0nGFNMHIOAVL5spvU3dsqtckUfozHQL7PJ3HiSK', '2014-12-08 20:55:03', '2014-12-08 07:55:03', '0000-00-00 00:00:00', 1),
(2, 'timmy', '$2y$10$EMZzpJSZ5fSuAcrhlYXtc.HaOyxFP/SEq9ZDadov1vUBsfKYMmtPm', 'Tim', 'Taylor', 'timtaylor@xtra.co.nz', '09 455 1234', 'timmy.jpg', 'improve on all the aspects: knowledge, experience and personal in a world class manufacturing environment. My commitment is to perform every requested task with responsibility, honor ability and my best effort. ', 'Mentor\r\nBig Brothers & sisters\r\nAugust 2008 - present\r\n-Act as a big sister to a loving 11 year old and guide her through positive achivements.\r\n-Tutor helped child to strive for excellance at school.\r\n- Engaged in team sports, and activities.\r\n\r\nDay Camp Counsellor\r\nAmbrosia Camp\r\nSummer 2007/2008\r\n- Taught children ages 6-9 the importance of community outreach by volunteering for local hospitals, parks and other charities.\r\n- Conducted workshops to educate kids about the different charities in the world.\r\n\r\nSales Specialist\r\nAmerican Eagle\r\nApril 2007 - December 2007\r\n- Made the 2nd highest number in store sales and became the employee of the month.\r\nTrained new employees on cash registers and sales precedures.\r\nEarned one of the highest numbers of clients to open credit cared applications.', '2003-2005\r\nBachelor of Teaching and Training\r\n\r\n1999 - 2002\r\nHigh School, University Entrance.', '2008\r\nBest all round supporter\r\n\r\n2008\r\n1st in running sports\r\n2nd in Team events', 'Mentor\r\nBig Brothers & sisters\r\nAugust 2008 - present\r\n\r\nDay Camp Counsellor\r\nAmbrosia Camp\r\nSummer 2007/2008\r\n\r\nSales Specialist\r\nAmerican Eagle\r\nApril 2007 - December 2007', '2', '2', 'I currently moved over from the states and need help with my CV and writing letters to future employees.\r\n\r\nThank you\r\nRegards\r\n\r\nTim', '', '2014-12-06 00:44:51', '2014-12-05 11:44:51', '0000-00-00 00:00:00', 0),
(3, 'KiKi', '$2y$10$EMZzpJSZ5fSuAcrhlYXtc.HaOyxFP/SEq9ZDadov1vUBsfKYMmtPm', 'Kimberley', 'Smith', 'k.smith@yahoo.com', '02 234 21244', 'Kiki.png', 'To be able to find a job that will help me find happiness and friendships with in a job. ', 'Intern\r\n2014\r\nJohn Irving Architects\r\n\r\nI only have 6month experience in working as an intern at John Irvine Architects. There I was able to map sketches, plans and liaise with Senior Architects and Business Analysts to produce sound structural plans for both residential and commercial sites.', '2010 - 2013\r\nBachelor of Architecture\r\nUniversity of Auckland\r\n\r\n2006 - 2009\r\nAuckland Girls Grammer School\r\nA University ', '2013 \r\nWinning an internship at John Irving Architects.\r\n\r\n2013 \r\n1st in Bachelor of Architecture, with Honors.\r\n\r\n2009\r\nDux\r\n1st at High School in Design & Architecture\r\n', 'Intern\r\n2014\r\nJohn Irving Architects\r\n\r\n\r\nManager\r\n2004 - 2013\r\nPaper Plus', 'Design & Architecture', 'Interview Preparation', 'I find going to interviews scary, so would like to overcome that by practicing and practicing. Please help me.\r\nRegards\r\n\r\nKiki', '', '2014-12-06 00:37:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, 'JadeSmith', '$2y$10$EMZzpJSZ5fSuAcrhlYXtc.HaOyxFP/SEq9ZDadov1vUBsfKYMmtPm', 'Jade', 'Smith', 'jades.smith@yahoo.com', '021 1234 234', 'jay.jpg', 'To be a fully qualified pharmacist and work in a pharmaceutical company researching skin age care.', 'Administrative Assistant\r\nJanuary 2010 - Date\r\n\r\nAdministrative Co-ordinator\r\nAugust 2006 - November 2008', 'Bachelor of  Arts 2006', 'Top Grade 2006 for paper in American Pharmaceuticals.', 'Administrative Assistant\r\n\r\nPremier Pharmaceuticals, Christchurch, Nz\r\n\r\nJanuary 2010 - Date\r\n\r\nprovide full secretarial and administrative support to the 10-person sales department\r\nmanage customer requests for information\r\nprepare departmental correspondence, documents, reports, presentations\r\nschedule and coordinate meetings and appointments\r\ndraw up and distribute minutes of meetings\r\nplan and arrange travel itineraries\r\norganize functions and events\r\ntrack expense claims and prepare expense reports\r\nset up and maintain customer data management systems\r\n\r\nAdministrative Co-ordinator\r\n\r\nBuckleys Property Management Company, Christchurch, NZ\r\n\r\nAugust 2006 - November 2008\r\n\r\nprovided the full range of secretarial and administrative support to the Managing Director plus 5 employees\r\nscheduled meetings, appointments and property viewings\r\nco-ordinated company events and functions\r\nhandled incoming calls and correspondence\r\nprepared correspondence, documents, newsletters\r\nliaised directly with maintenance contractors, clients, tenants\r\nprocessed invoices and prepared payments', 'Science and Technology', 'Interview Preparation', 'Please help me prepare for a job interview I have dated for 30th of November 2014. Scared out of my wits. Thanks\r\nRegards\r\nJade', '', '2014-12-06 00:37:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(6, 'Justin1986', '$2y$10$EMZzpJSZ5fSuAcrhlYXtc.HaOyxFP/SEq9ZDadov1vUBsfKYMmtPm', 'Justin', 'Beibs', 'justinbeibs@gmail.com', '021 2345 234', 'Justin.jpg', 'I want a job to utilize the skills which I''ve gotten from my studies and my parents, teachers, friends and others.', 'Lead role in Les Miserables, both acting and singing for 3 month tour around NZ.\r\n\r\nSmall advertising acting role, where I portrayed a young man for Colgate toothpaste.', 'Bachelor of Drama', 'Achievement in fine arts at the School of Drama, Auckland, NZ.\r\n\r\nHonorable mention in the Sunday Star times for the lead role in Les Miserables 2010.', '2010, 3mth contract \r\nActors Guild, Auckland\r\n\r\n2009-2010\r\nBar Manager\r\nFoodStore\r\n\r\n2008 - 2009\r\nAuckland Actors Company', 'Advertising, Arts and Media', 'Employment Contracts', 'Please help me with my next acting gig, I need help with a current contract I have signed, my employer is not doing the right thing, I need a human resources help.', '', '2014-12-06 00:37:59', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(8, 'Vicram', '$2y$10$EMZzpJSZ5fSuAcrhlYXtc.HaOyxFP/SEq9ZDadov1vUBsfKYMmtPm', 'Vic', 'Clark', 'clark.victoriajane@gmail.com', '024029244224', 'Vicky.jpg', 'dsrg', 'seffgswdgh', 'sdggdhhswdgh', 'adlglasedghawdgksgseg', 'sdggkjhsdvgkbjn', '10', '4', 'none', 'J4GO415eSaRwDf4IRkitGfarq9gV49qpUWAWGYOritisWgSesDfxJI3IzicQ', '2014-12-08 21:38:57', '2014-12-08 08:38:57', '0000-00-00 00:00:00', 0);
