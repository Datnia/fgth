<?php
get_header();
?>

<section id="books-banner">
<header>
<?php
the_title('<h1>', '</h1>');
?>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
?>
</header>
<div class="circle light-blue one rellax" data-rellax-speed="2"></div>
<div class="circle light-blue two"></div>
<div class="circle light-blue three rellax" data-rellax-speed="-1"></div>
<div class="circle light-blue four rellax" data-rellax-speed="1"></div>
</section>

<section id="books-container">
<div class="col">
  <h2>Recommended Books</h2>
  <div class="books-index">
    <div class="book-wrapper">
      <div>
        <img
          src=<?php echo wp_get_attachment_url(237); ?>
          alt="book"
        />
        <button value="book-1">MORE INFO</button>
      </div>
      <label>
        <select onchange="location=this.value">
          <option value="#" disabled selected
            >Programs including this book</option
          >
          <option value="/product/grief-recovery-8-weeks/"
            >The Grief Recovery 8-Week Group Program</option
          >
          <option value="/product/grief-recovery-weekend/"
            >The Grief Recovery Weekend Group Program</option
          >
          <option value="/product/grief-recovery-7-weeks/"
            >The Grief Recovery 7-Week 1-on-1 Program</option
          >
          <option value="/product/grief-recovery-7-week-1-on-1-online-program/"
            >The Grief Recovery 7-Week 1-on-1 Online Program</option
          >
        </select>
      </label>
    </div>
    <div class="book-wrapper">
      <div>
        <img
          src=<?php echo wp_get_attachment_url(238); ?>
          alt="book"
        />
        <button value="book-2">MORE INFO</button>
      </div>
      <label>
        <select onchange="location=this.value">
          <option value="0" disabled selected
            >Programs including this book</option
          >
          <option value="/product/helping-children-with-loss-grief-recovery-4-week-group-program/"
            >“Helping Children with Loss” Grief Recovery 4-Week Group Program</option
          >
          <option value="/product/helping-children-with-loss-grief-recovery-4-week-1-on-1-program/"
            >“Helping Children with Loss” Grief Recovery 4-Week 1-on-1 Program</option
          >
        </select>
      </label>
    </div>
    <div class="book-wrapper">
      <div>
        <img
          src=<?php echo wp_get_attachment_url(239); ?>
          alt="book"
        />
        <button value="book-3">MORE INFO</button>
      </div>
      <label>
      <select onchange="location=this.value">
          <option value="0" disabled selected
            >Programs including this book</option
          >
          <option value="/product/moving-on-grief-recovery-6-week-group-program/"
            >Moving On from Romantic Relationship Baggage 6-Week Group Program</option
          >
          <option value="/product/moving-on-grief-recovery-6-week-1-on-1-program/"
            >Moving On from Romantic Relationship Baggage 6-Week 1-on-1 Program</option
          >
        </select>
      </label>
    </div>
    <div class="book-wrapper">
      <div>
        <img
          src=<?php echo wp_get_attachment_url(240); ?>
          alt="book"
        />
        <button value="book-4">MORE INFO</button>
      </div>
      <label>
      <select onchange="location=this.value">
          <option value="0" disabled selected
            >Programs including this book</option
          >
          <option value="/product/pet-loss-grief-recovery-6-week-group-program/"
            >Pet Loss Grief Recovery 6-Week Group Program</option
          >
          <option value="/product/pet-loss-grief-recovery-6-week-1-on-1-program/"
            >Pet Loss Grief Recovery 6-Week 1-on-1 Program</option
          >
        </select>
      </label>
    </div>
    <div class="book-wrapper">
      <div>
        <img
          src=<?php echo wp_get_attachment_url(241); ?>
          alt="book"
        />
        <button value="book-5">MORE INFO</button>
      </div>
    </div>
    <div class="book-wrapper">
      <div>
        <img
          src=<?php echo wp_get_attachment_url(236); ?>
          alt="book"
        />
        <button value="book-6">MORE INFO</button>
      </div>
      <label>
      <select onchange="location=this.value">
          <option value="0" disabled selected
            >Programas Que Incluyen Este Libro</option
          >
          <option value="/product/programa-en-grupo-de-8-semanas-superando-perdidas-emocionales/"
            >Programa en Grupo de 8 Semanas: Superando Perdidas Emocionales</option
          >
          <option value="/product/taller-de-fin-de-semana-en-grupo-superando-perdidas-emocionales/"
            >Taller de Fin de Semana en Grupo: Superando Perdidas Emocionales</option
          >
          <option value="/product/programa-privado-de-7-semanas-superando-perdidas-emocionales/"
            >Programa Privado de 7 Semanas: Superando Pérdidas Emocionales</option
          >
          <option value="/product/programa-privado-virtual-de-7-semanas-superando-perdidas-emocionales-sesiones-virtuales-por-internet/"
            >Programa Privado Virtual de 7 Semanas: Superando Pérdidas Emocionales (Sesiones Virtuales por Internet)</option
          >
        </select>
      </label>
      <span>Versión en Español</span>
    </div>
    <div class="book-wrapper">
      <div>
        <img
          src=<?php echo wp_get_attachment_url(235); ?>
          alt="book"
        />
        <button value="book-7">MORE INFO</button>
      </div>
      <label>
      <select onchange="location=this.value">
          <option value="0" disabled selected
            >Programas Que Incluyen Este Libro</option
          >
          <option value="/product/programa-en-grupo-de-4-semanas-cuando-los-ninos-sufren/"
            >Programa en Grupo de 4 Semanas: Cuando Los Niños Sufren</option
          >
          <option value="/product/programa-privado-de-4-semanas-cuando-los-ninos-sufren/"
            >Programa Privado de 4 Semanas: Cuando Los Niños Sufren</option
          >
        </select>
      </label>
      <span>Versión en Español</span>
    </div>
    <div class="book-wrapper">
      <div>
        <img
          src=<?php echo wp_get_attachment_url(234); ?>
          alt="book"
        />
        <button value="book-8">MORE INFO</button>
      </div>
    </div>
    <div class="book-wrapper">
      <div>
        <img
          src=<?php echo wp_get_attachment_url(242); ?>
          alt="book"
        />
        <button value="book-9">MORE INFO</button>
      </div>
    </div>
  </div>
  <div class="book-display">
 
    <div class="book book-1">
      <header>
      <div class="arrow">
          <img src="https://testdesign.fromgrievingtohealing.com/wp-content/uploads/2019/08/arrow.png" alt="arrow">
        </div>
        <div class="img-wrapper">
          <img
            src=<?php echo wp_get_attachment_url(247); ?>
            alt="book"
          />
        </div>
        <div class="title">
          <h3>The Grief Recovery Handbook</h3>
          <h4>
            The Action Program for Moving Beyond Death, Divorce, and Other
            Losses including Health, Career, and Faith
          </h4>
          <p>John W. James and Russell Friedman</p>
        </div>
      </header>
      <div class="book-details">
        <div class="container">
          <div class="row">
            <h3>Overview</h3>
            <p>
              This classic guide which has helped many people move beyond loss
              and towards recovery, has been expanded in this special 20th
              anniversary edition. The new material includes guidelines for
              choosing which loss to work on first and specific instruction for
              dealing with loss of health, career, faith, and much more.
              <br /><br />
              Incomplete recovery from grief can have a lifelong negative effect
              on the capacity for happiness. Drawing from their own histories as
              well as from others’, the authors illustrate how it is possible to
              recovery from grief and regain energy and spontaneity. Based on a
              proven program, The Grief Recovery Handbook offers grievers the
              specific actions needed to move beyond loss. <br /><br />
              <strong>New material in this edition includes:</strong>
            </p>
            <ul>
              <li>Loss of faith</li>
              <li>Loss of career and financial issues</li>
              <li>Loss of health</li>
              <li>Growing up in an alchoholic or dysfunctional home</li>
            </ul>
          </div>
          <div class="row">
            <h3>Biography</h3>
            <p>
              John W. James and Russell Friedman have been working with grievers
              for more than thirty years. They have served as consultants to
              thousands of bereavement professionals and provide Grief Recovery
              Seminars and Certification Programs throughout the Unites States
              and Canada. They are the founders of The Grief Recovery Institute.
            </p>
          </div>
          <div class="row programs">
            <h3>Programs Including This Book</h3>
            <a href="/product/grief-recovery-8-weeks/">The Grief Recovery 8-Week Group Support Program</a>
            <a href="/product/grief-recovery-weekend/">The Grief Recovery Weekend Group Program</a>
            <a href="/product/grief-recovery-7-weeks/">The Grief Recovery 7-Week 1-on-1 Program</a>
            <a href="/product/grief-recovery-7-week-1-on-1-online-program/">The Grief Recovery 7-Week 1-on-1 Online Program</a>
          </div>
        </div>
      </div>
    </div>
    <div class="book book-2">
      <header>
      <div class="arrow">
          <img src="https://testdesign.fromgrievingtohealing.com/wp-content/uploads/2019/08/arrow.png" alt="arrow">
        </div>
        <div class="img-wrapper">
          <img
            src=<?php echo wp_get_attachment_url(250); ?>
            alt="book"
          />
        </div>
        <div class="title">
          <h3>When Children Grieve</h3>
          <h4>
            For Adults to Help Children Deal with Death, Divorce, Pet Loss,
            Moving, and Other Losses
          </h4>
          <p>
            John W. James and Russell Friedman with Dr. Leslie Landon Matthews
          </p>
        </div>
      </header>
      <div class="book-details">
        <div class="container">
          <div class="row">
            <h3>Overview</h3>
            <p>
              To watch a child grieve and not know what to do is a profoundly
              difficult experience for parents, teachers, and caregivers. Yet,
              there are guidelines for helping children develop a lifelong
              healthy response to loss.
              <br />
              <br />
              In When Children Grieve, the authors offer a cutting-edge volume
              to free children from the false idea of “not feeling bad” and to
              empower them with positive, effective methods of dealing with
              loss.
              <br />
              <br />
              There are many life experiences that can produce feelings of grief
              in a child, from the death of a relative or a divorce in the
              family to more everyday experiences such as moving to a new
              neighborhood or losing a prized possession. No matter the reason
              or degree of severity, if a child you love is grieving, the
              guidelines examined in this thoughtful book can make a difference.
            </p>
          </div>
          <div class="row">
            <h3>Biography</h3>
            <p>
              John W. James and Russell Friedman have been working with grievers
              for more than thirty years. They have served as consultants to
              thousands of bereavement professionals and provide Grief Recovery
              Seminars and Certification Programs throughout the United States
              and Canada. They are the founders of the Grief Recovery Institute.
            </p>
          </div>
          <div class="row programs">
            <h3>Programs Including This Book</h3>
            <a href="/product/helping-children-with-loss-grief-recovery-4-week-group-program/">“Helping Children with Loss” Grief Recovery 4-Week Group Program</a>
            <a href="/product/helping-children-with-loss-grief-recovery-4-week-1-on-1-program/">“Helping Children with Loss” Grief Recovery 4-Week 1-on-1 Program</a>
          </div>
        </div>
      </div>
    </div>
    <div class="book book-3">
      <header>
      <div class="arrow">
          <img src="https://testdesign.fromgrievingtohealing.com/wp-content/uploads/2019/08/arrow.png" alt="arrow">
        </div>
        <div class="img-wrapper">
          <img
            src=<?php echo wp_get_attachment_url(249); ?>
            alt="book"
          />
        </div>
        <div class="title">
          <h3>Moving On</h3>
          <h4>
            Dump Your Relationship Baggage and Make Room for the Love of Your Life
          </h4>
          <p>
            Russell Friedman and John W. James
          </p>
        </div>
      </header>
      <div class="book-details">
        <div class="container">
          <div class="row">
            <h3>Overview</h3>
            <p>
            In this groundbreaking book, Russell Friedman and John W. James show readers how to move on from unsuccessful past relationships and finally find the loves of their lives. Demonstrating revolutionary ideas that have worked for thousands of their clients at the Grief Recovery Institute, Friedman and James give readers the strategies they need to effectively mourn the loss of their relationships, while opening themselves up to love in the future. With compassionate guidance, Friedman and James help readers to close a chapter of their romantic pasts so they can begin again.
            </p>
          </div>
          <div class="row">
            <h3>Biography</h3>
            <p>
              John W. James and Russell Friedman have been working with grievers
              for more than thirty years. They have served as consultants to
              thousands of bereavement professionals and provide Grief Recovery
              Seminars and Certification Programs throughout the United States
              and Canada. They are the founders of the Grief Recovery Institute.
            </p>
          </div>
          <div class="row programs">
            <h3>Programs Including This Book</h3>
            <a href="/product/moving-on-grief-recovery-6-week-group-program/">Moving On from Romantic Relationship Baggage 6-Week Group Program</a>
            <a href="/product/moving-on-grief-recovery-6-week-1-on-1-program/">Moving On from Romantic Relationship Baggage 6-Week 1-on-1 Program</a>
          </div>
        </div>
      </div>
    </div>
    <div class="book book-4">
      <header>
      <div class="arrow">
          <img src="https://testdesign.fromgrievingtohealing.com/wp-content/uploads/2019/08/arrow.png" alt="arrow">
        </div>
        <div class="img-wrapper">
          <img
            src=<?php echo wp_get_attachment_url(252); ?>
            alt="book"
          />
        </div>
        <div class="title">
          <h3>The Grief Recovery Handbook for Pet Loss</h3>
          <h4>
          If you’ve found yourself almost inconsolable after your pet died, please know that you’re normal.
          </h4>
          <p>
          Russell Friedman, Cole James, and John W. James
          </p>
        </div>
      </header>
      <div class="book-details">
        <div class="container">
          <div class="row">
            <h3>Overview</h3>
            <p>
            If you’ve found that your family and friends don’t seem to understand the level of your grief, please know that, too, is normal.
                <br>
                <br>
                Without comparing our relationships with our pets to those with people, we know that, because of the unique emotional relationships we have with our pets, their deaths produce a level of pain that is difficult to describe.
                <br><br>
                If you relate to any or all of these sentences, this book is for you.
                <br><br>
                We have been there and most probably will be there again. We will be with you on this journey to help your heart deal with the absence of your cherished companion.
                <br><br>
                —Russell, Cole, and John
                <br><br>
                Your relationship with your pet is special—it’s a bond that is very different than those that human beings share with each other. When a beloved pet passes away, people often resort to incorrect mechanisms to deal with the grief, such as trying to move too quickly past the loss (dismissing the real impact), or even attempting to replace the pet immediately. However, these are merely two myths out of six that the authors discuss and dismantle in The Grief Recovery Handbook for Pet Loss. Based on the authors’ Grief Recovery Method®, this book addresses how losing a pet is different from losing a human loved one, and ultimately, how to move on with life.
            </p>
          </div>
          <div class="row">
            <h3>Biography</h3>
            <p>
              John W. James and Russell Friedman have been working with grievers
              for more than thirty years. They have served as consultants to
              thousands of bereavement professionals and provide Grief Recovery
              Seminars and Certification Programs throughout the United States
              and Canada. They are the founders of the Grief Recovery Institute.
            </p>
          </div>
          <div class="row programs">
            <h3>Programs Including This Book</h3>
            <a href="/product/pet-loss-grief-recovery-6-week-group-program/">Pet Loss Grief Recovery 6-Week Group Program</a>
            <a href="/product/pet-loss-grief-recovery-6-week-1-on-1-program/">Pet Loss Grief Recovery 6-Week 1-on-1 Program</a>
          </div>
        </div>
      </div>
    </div>
    <div class="book book-5">
      <header>
      <div class="arrow">
          <img src="https://testdesign.fromgrievingtohealing.com/wp-content/uploads/2019/08/arrow.png" alt="arrow">
        </div>
        <div class="img-wrapper">
          <img
            src=<?php echo wp_get_attachment_url(248); ?>
            alt="book"
          />
        </div>
        <div class="title">
          <h3>Moving Beyond Loss</h3>
          <h4>
          Real Answers to Real Questions from Real People
          </h4>
          <p>
          Russell Friedman and John W. James
          </p>
        </div>
      </header>
      <div class="book-details">
        <div class="container">
          <div class="row">
            <h3>Overview</h3>
            <p>
            In October 2010 the authors became exclusive providers of grief and grief-recovery-related content on a memorial website called Tributes.com, a site that receives approximately three million unique hits per month, and to which readers submit very personal and unique grief-related questions. Collected in this book are not only a bounty of personal and often moving questions but also the authors’ equally compelling responses and tips for using the Grief Recovery Method to deal with broken hearts. The book not only deals with grief from loss of a loved one, but also the grieving that occurs following a divorce, a sudden downturn in health, the loss of a job, and even the loss of faith.
            </p>
          </div>
          <div class="row">
            <h3>Biography</h3>
            <p>
              John W. James and Russell Friedman have been working with grievers
              for more than thirty years. They have served as consultants to
              thousands of bereavement professionals and provide Grief Recovery
              Seminars and Certification Programs throughout the United States
              and Canada. They are the founders of the Grief Recovery Institute.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="book book-6">
      <header>
      <div class="arrow">
          <img src="https://testdesign.fromgrievingtohealing.com/wp-content/uploads/2019/08/arrow.png" alt="arrow">
        </div>
        <div class="img-wrapper">
          <img
            src=<?php echo wp_get_attachment_url(236); ?>
            alt="book"
          />
        </div>
        <div class="title">
          <h3>Manual Superando Perdidas Emocionales</h3>
          <h4>
          El Programa Practico para Superar el Dolor por Muerte, Divorcio y Otras Perdidas incluyendo la Salud, Carrera, y la Fe
          </h4>
          <p>
          John W. James y Russell Friedman
          </p>
        </div>
      </header>
      <div class="book-details">
        <div class="container">
          <div class="row">
            <h3>Resumen del Libro</h3>
            <p>
            Esta guía clásica que ha ayudado a muchas personas a ir más allá del duelo y hacia la recuperación, se ha ampliado en esta edición especial del vigésimo aniversario. El nuevo material incluye pautas para elegir cual pérdida se tratará primero e instrucción específica para tratar la pérdida de salud, carrera, fe y mucho más.
            <br><br>
            La recuperación incompleta del duelo puede tener un efecto negativo de por vida en la capacidad de felicidad. Basándose en sus propias historias y en las de otros, los autores ilustran cómo es posible recuperarse del dolor emocional y recuperar la energía y la espontaneidad. Basado en un programa probado, el Manual Superando Perdidas Emocionales ofrece las acciones necesarias para superar las perdidas emocionales y salir adelante.
            <br><br>
            <strong>El nuevo material en esta edición incluye:</strong>
            </p>
            <ul>
                <li>Pérdida de fe</li>
                <li>Pérdida de carrera y problemas financieros</li>
                <li>Pérdida de salud</li>
                <li>Crecer en un hogar alcohólico o disfuncional</li>
            </ul>
          </div>
          <div class="row">
            <h3>Biografía</h3>
            <p>
            John W. James y Russell Friedman han estado trabajando con personas sufriendo de perdidas emocionales por más de treinta años. Han servido como consultores a miles de profesionales de duelo y brindan seminarios de recuperación de duelo y programas de certificación en todos los Estados Unidos y Canadá. Ellos son los fundadores de The Grief Recovery Institute.
            </p>
          </div>
          <div class="row programs">
            <h3>Programas Que Incluyen Este Libro</h3>
            <a href="/product/programa-en-grupo-de-8-semanas-superando-perdidas-emocionales/">Programa en Grupo de 8 Semanas: Superando Perdidas Emocionales</a>
            <a href="/product/taller-de-fin-de-semana-en-grupo-superando-perdidas-emocionales/">Taller de Fin de Semana en Grupo: Superando Perdidas Emocionales</a>
            <a href="/product/programa-privado-de-7-semanas-superando-perdidas-emocionales/">Programa Privado de 7 Semanas: Superando Pérdidas Emocionales</a>
            <a href="/product/programa-privado-virtual-de-7-semanas-superando-perdidas-emocionales-sesiones-virtuales-por-internet/">Programa Privado Virtual de 7 Semanas: Superando Pérdidas Emocionales (Sesiones Virtuales por Internet)</a>
          </div>
        </div>
      </div>
    </div>
    <div class="book book-7">
      <header>
      <div class="arrow">
          <img src="https://testdesign.fromgrievingtohealing.com/wp-content/uploads/2019/08/arrow.png" alt="arrow">
        </div>
        <div class="img-wrapper">
          <img
            src=<?php echo wp_get_attachment_url(235); ?>
            alt="book"
          />
        </div>
        <div class="title">
          <h3>CUANDO LOS NIÑOS SUFREN</h3>
          <h4>
          Para los Adultos que Quieren Ayudar a Niños a Recuperarse de la Muerte de un Ser Querido, de un Divorcio, de la Muerte de una Mascota, de una Mudanza, y de Otras Perdidas Emocionales          </h4>
          <p>
          John W. James y Russell Friedman con la Dra. Leslie Landon Matthews
          </p>
        </div>
      </header>
      <div class="book-details">
        <div class="container">
          <div class="row">
            <h3>Resumen del Libro</h3>
            <p>
            Ver a un niño llorar y no saber qué hacer es una experiencia profundamente difícil para los padres, maestros y guardianes. Sin embargo, existen pautas para ayudar a los niños a desarrollar una respuesta saludable y duradera para superar y salir adelante después de las perdidas emocionales.
            <br><br>
            En Cuando los Niños Sufren, los autores ofrecen un programa practico para ayudar a los adultos a liberar a los niños de la falsa idea de “no sentirse mal” y para empoderarlos con métodos positivos y efectivos para lidiar con las pérdidas emocionales.
            <br><br>
            Hay muchas experiencias de vida que pueden producir sentimientos de dolor en un niño, desde la muerte de un pariente o un divorcio en la familia hasta experiencias más cotidianas, como mudarse a un nuevo vecindario o perder una posesión preciada. No importa la razón o el grado de severidad, si un niño que ama está sufriendo, las pautas examinadas en este libro pueden marcar la diferencia.
            </p>
          </div>
          <div class="row">
            <h3>Biografía</h3>
            <p>
            John W. James y Russell Friedman han estado trabajando con personas sufriendo de perdidas emocionales por más de treinta años. Han servido como consultores a miles de profesionales de duelo y brindan seminarios de recuperación de duelo y programas de certificación en todos los Estados Unidos y Canadá. Ellos son los fundadores de The Grief Recovery Institute.
            </p>
          </div>
          <div class="row programs">
            <h3>Programas Que Incluyen Este Libro</h3>
            <a href="/product/programa-en-grupo-de-4-semanas-cuando-los-ninos-sufren/">Programa en Grupo de 4 Semanas: Cuando Los Niños Sufren</a>
            <a href="/product/programa-privado-de-4-semanas-cuando-los-ninos-sufren/">Programa Privado de 4 Semanas: Cuando Los Niños Sufren</a>
          </div>
        </div>
      </div>
    </div>
    <div class="book book-8">
      <header>
      <div class="arrow">
          <img src="https://testdesign.fromgrievingtohealing.com/wp-content/uploads/2019/08/arrow.png" alt="arrow">
        </div>
        <div class="img-wrapper">
          <img
            src=<?php echo wp_get_attachment_url(251); ?>
            alt="book"
          />
        </div>
        <div class="title">
          <h3>Emotional First Aid</h3>
          <h4>
             Heal small emotional injuries before they become big ones.
          </h4>
          <p>Guy Winch, Ph.D.</p>
        </div>
      </header>
      <div class="book-details">
        <div class="container">
          <div class="row">
            <h3>Overview</h3>
            <p>
            We all sustain emotional wounds. Failure, guilt, rejection, and loss are as much a part of life as the occasional scraped elbow. But while we typically bandage a cut or ice a sprained ankle, our first aid kit for emotional injuries is not just understocked—it’s nonexistent.
            <br><br>
            Fortunately, there is such a thing as mental first aid for battered emotions. Drawing on the latest scientific research and using real-life examples, practicing psychologist Guy Winch, Ph.D. offers specific step-by-step treatments that are fast, simple, and effective. Prescriptive and unique, Emotional First Aid is essential reading for anyone looking to become more resilient, build self-esteem, and let go of the hurts and hang-ups that are holding them back.
            </p>
          </div>
          <div class="row">
            <h3>Biography</h3>
            <p>
            Guy Winch, Ph.D., is a licensed psychologist, author, and in-demand keynote speaker who is a leading advocate for integrating the science of emotional health into our daily lives, workplaces, and education systems. Dr. Winch's viral TED Talks, <a href="http://www.ted.com/talks/guy_winch_the_case_for_emotional_hygiene" target="_blank">Why We All Need to Practice Emotional First Aid</a>,<a href="https://www.ted.com/talks/guy_winch_how_to_fix_a_broken_heart" target="_blank"> How to Fix a Broken Heart</a>, and <a href="https://www.ted.com/talks/guy_winch_how_to_turn_off_work_thoughts_during_your_free_time" target="_blank"> How to Turn Off Work Thoughts During Your Free Time</a>, have been viewed over 20 million times and his books,<a href="https://www.amazon.com/Squeaky-Wheel-Complaining-Relationships-Self-Esteem/dp/1976342139/ref=as_li_ss_tl?ie=UTF8&linkCode=sl1&tag=guywinchcom-20&linkId=903af60c56d1e67f17e38b775e3a94a2" target="_blank"> The Squeaky Wheel: Complaining the Right Way to Get Results, Improve Your Relationships and Enhance Self-Esteem</a> (Amazon KDP),<a href="https://www.amazon.com/gp/product/0142181072/ref=as_li_tl?ie=UTF8&camp=211189&creative=373489&creativeASIN=0142181072&link_code=as3&tag=guywinchcom-20" target="_blank"> Emotional First Aid: Healing Rejection, Guilt, Failure, and Other Everyday Hurts</a> (Plume, 2014), and <a href="https://www.amazon.com/How-Fix-Broken-Heart-Books/dp/1501120123" target="_blank">How to Fix a Broken Heart</a> (TED Books/Simon & Schuster, 2018) have been translated into 26 languages. Dr. Winch's work is frequently featured in national and international publications and media. He also writes the popular <a href="https://www.psychologytoday.com/blog/the-squeaky-wheel" target="_blank">Squeaky Wheel Blog</a> on Psychology Today.com and the science based advice column <a href="https://ideas.ted.com/author/guy-winch/" target="_blank">Dear Guy</a>, for TED.com.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="book book-9">
      <header>
      <div class="arrow">
          <img src="https://testdesign.fromgrievingtohealing.com/wp-content/uploads/2019/08/arrow.png" alt="arrow">
        </div>
        <div class="img-wrapper">
          <img
            src=<?php echo wp_get_attachment_url(253); ?>
            alt="book"
          />
        </div>
        <div class="title">
          <h3>Option B</h3>
          <h4>
          Facing Adversity, Building Resilience, and Finding Joy
          </h4>
          <p>Sheryl Sandberg and Adam Grant</p>
        </div>
      </header>
      <div class="book-details">
        <div class="container">
          <div class="row">
            <h3>Overview</h3>
            <p>
            After the unexpected passing of her beloved husband, Facebook COO and bestselling author of Lean In, Sheryl Sandberg, feared that she and her children would never find joy again. Fortunately this fear was unfounded. Option B: Facing Adversity, Building Resilience, and Finding Joy–co-authored with psychologist and friend Adam Grant–shows you how Sandberg, and many others who have overcome a wide range of profound hardships, triumphed over tragedy. The book posits that it’s helpful to think of resilience like a muscle, one that atrophies in the calm between the storms of our lives. But there are things we can do to develop it, so we’re better prepared when adversity strikes. In America, culture can put a kink in this plan. Processing a painful event can be hindered when you’re wired not to talk about it. We all know that when someone asks how we’re doing, the expected response is “fine,” no matter if we’ve just lost a limb, or had a cancer scare. We will grin, and we will bear it, and we will go back to work too soon and burst into tears in the copy room when confronted by a malevolent stapler (or maybe that’s just me). Recently, Sandberg helped to enact a new employee benefit at Facebook: 20 days of paid bereavement leave, twice the amount that was offered previously. As she explains in Option B, it’s the humane thing to do, and it also makes good business sense; compassionate companies engender more loyal employees. In this way, Option B is more than a little revolutionary. It challenges us to change systems that don’t always take our humanness into account. And that’s something we need to do on a personal level as well. None of us are immune to misfortune and heartbreak. We need to cut ourselves some slack when times get tough, and, as Sandberg discovered, flip the golden rule: When a loved one is in distress, instead of treating them how you would want to be treated, consider how they want to be treated, which may be quite different. Option B starts an (oftentimes) uncomfortable but important conversation. If we lean in to the numerous lessons it has on offer, there’s a lot more joy to be found. –Erin Kodicek, The Amazon Book Review
            </p>
          </div>
          <div class="row">
            <h3>Biography</h3>
            <p>
            In this book, Facebook COO, Sheryl Sandberg, talks about returning to work after her husband’s death, and Wharton management and psychology professor, Adam Grant, discusses what the research says about resilience. In this joint book collaboration, they address how to build resilience in yourself, your team, and your organization.            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
dynamic_sidebar('books');
?>
</section>

<div class="books-slider-wrapper">
<div class="books-slider">
    <div class="slide">
        <img class="book-1" src=<?php echo wp_get_attachment_url(237); ?> alt="book">
    </div>
    <div class="slide">
        <img class="book-2" src=<?php echo wp_get_attachment_url(238); ?> alt="book">
    </div>
    <div class="slide">
        <img class="book-3" src=<?php echo wp_get_attachment_url(239); ?> alt="book">
    </div>
    <div class="slide">
        <img class="book-4" src=<?php echo wp_get_attachment_url(240); ?> alt="book">
    </div>
    <div class="slide">
        <img class="book-5" src=<?php echo wp_get_attachment_url(241); ?> alt="book">
    </div>
    <div class="slide">
        <img class="book-6" src=<?php echo wp_get_attachment_url(236); ?> alt="book">
    </div>
    <div class="slide">
        <img class="book-7" src=<?php echo wp_get_attachment_url(235); ?> alt="book">
    </div>
    <div class="slide">
        <img class="book-8" src=<?php echo wp_get_attachment_url(234); ?> alt="book">
    </div>
    <div class="slide">
        <img class="book-9" src=<?php echo wp_get_attachment_url(242); ?> alt="book">
    </div>
</div>
</div>
<section class="books-cta" id="blog-cta">
   <div class="container">
       <div class="img-wrapper">
           <img src=<?php echo wp_get_attachment_url(246); ?> alt="edit"> </div>
           <h2>Our Blog</h2>
           <h4>Read our timeless and informative blog posts.</h4>
           <a href=<?php echo get_the_permalink(162) ?> class="btn">Read Now</a>
           <div class="large-half-circles"></div>

   </div>
   <div class="container">
       <div class="img-wrapper">
           <img src=<?php echo wp_get_attachment_url(204); ?> alt="video"> </div>
           <h2>Watch Us on YouTube</h2>
           <h4>Check out our new channel!</h4>
           <a target="_blank" href="https://www.youtube.com/channel/UCBf1JrWEEvA2HubaUPRGQrw" class="btn">View Now</a>
           <div class="large-half-circles"></div>

   </div>
</section>


<?php
get_footer();
?>