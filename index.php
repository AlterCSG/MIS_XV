<?php
/* ============================================================
   INVITACIÓN XV AÑOS — DEIRANY GUADALUPE
   Intro con efecto máquina de escribir · Mobile-first
   ============================================================ */

$CONFIG = [
    'nombre'   => 'Deirany Guadalupe',
    'fecha'    => '2026-12-22T18:30:00',
    'mapa'     => 'https://maps.google.com/?q=Auditorio+Municipal+Balleza+Chihuahua',
    'forms'    => 'https://forms.gle/TU_FORM_ID_AQUI', // ← reemplaza aquí
    'musica'   => 'musica.mp3',
    'foto'     => 'https://images.unsplash.com/photo-1595959183082-7b570b7e08e2?w=600&q=80&auto=format&fit=crop',
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover, maximum-scale=5.0">
<meta name="theme-color" content="#5a0808">
<meta name="description" content="Invitación XV Años · Deirany Guadalupe · 22 Diciembre 2026">
<title>XV Años · Deirany Guadalupe</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Great+Vibes&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
/* ============================================================
   BASE
   ============================================================ */
:root{
    --rojo:         #7a0b0b;
    --rojo-oscuro:  #4a0505;
    --rojo-profundo:#2b0202;
    --rojo-claro:   #a31818;
    --dorado:       #d4af37;
    --dorado-claro: #f5e6a8;
    --dorado-brill: #fdf6d8;
    --crema:        #fdf8f0;
    --crema-osc:    #f5ecdc;
    --texto:        #2a1a1a;
    --texto-suave:  #6b5a5a;

    --f-titulo:  'Great Vibes', cursive;
    --f-serif:   'Cormorant Garamond', serif;
    --f-body:    'Montserrat', system-ui, -apple-system, sans-serif;

    --ease-out:  cubic-bezier(.22,.61,.36,1);
}

*,*::before,*::after{ box-sizing:border-box; margin:0; padding:0; }
html{ -webkit-text-size-adjust:100%; scroll-behavior:smooth; }
body{
    font-family:var(--f-body);
    color:var(--texto);
    background:var(--rojo-profundo);
    line-height:1.6;
    overflow-x:hidden;
    min-height:100vh;
    min-height:100svh;
    -webkit-tap-highlight-color:transparent;
}
img{ max-width:100%; height:auto; display:block; }
body.intro-lock{ overflow:hidden; height:100vh; height:100svh; }

/* ============================================================
   PORTADA
   ============================================================ */
#cover{
    position:fixed;
    inset:0;
    z-index:1000;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-direction:column;
    background:
        radial-gradient(ellipse at center, rgba(122,11,11,.6), rgba(43,2,2,.95) 70%),
        linear-gradient(135deg, var(--rojo-profundo), #1a0000);
    color:var(--dorado-claro);
    padding:2rem;
    text-align:center;
    transition:opacity 1s var(--ease-out), visibility 1s;
}
#cover.oculto{ opacity:0; visibility:hidden; pointer-events:none; }

.cover-ornament{
    width:60px; height:60px;
    margin-bottom:2rem;
    opacity:0;
    animation:fadeInScale .9s .2s var(--ease-out) forwards;
}
.cover-title{
    font-family:var(--f-serif);
    font-size:clamp(1rem, 3.5vw, 1.2rem);
    letter-spacing:.5em;
    text-transform:uppercase;
    color:var(--dorado);
    margin-bottom:1rem;
    opacity:0;
    animation:fadeIn .9s .5s var(--ease-out) forwards;
}
.cover-name{
    font-family:var(--f-titulo);
    font-size:clamp(2.5rem, 10vw, 4.5rem);
    line-height:1.1;
    background:linear-gradient(135deg, var(--dorado-claro), var(--dorado), var(--dorado-claro));
    -webkit-background-clip:text;
    background-clip:text;
    -webkit-text-fill-color:transparent;
    margin-bottom:.5rem;
    opacity:0;
    animation:fadeIn .9s .8s var(--ease-out) forwards;
}
.cover-sub{
    font-family:var(--f-serif);
    font-size:clamp(.85rem, 3vw, 1rem);
    letter-spacing:.3em;
    text-transform:uppercase;
    color:rgba(245,230,168,.75);
    margin-bottom:3rem;
    opacity:0;
    animation:fadeIn .9s 1.1s var(--ease-out) forwards;
}
.btn-open{
    position:relative;
    display:inline-flex;
    align-items:center;
    gap:.7rem;
    padding:1.1rem 2.5rem;
    background:linear-gradient(135deg, var(--rojo), var(--rojo-oscuro));
    border:1.5px solid var(--dorado);
    border-radius:50px;
    color:var(--dorado-claro);
    font-family:var(--f-body);
    font-size:.85rem;
    font-weight:500;
    letter-spacing:.25em;
    text-transform:uppercase;
    cursor:pointer;
    overflow:hidden;
    opacity:0;
    animation:fadeIn .9s 1.5s var(--ease-out) forwards;
    transition:transform .3s var(--ease-out), box-shadow .3s var(--ease-out);
    -webkit-tap-highlight-color:transparent;
}
.btn-open::after{
    content:'';
    position:absolute;
    inset:0;
    background:linear-gradient(120deg, transparent 30%, rgba(245,230,168,.3) 50%, transparent 70%);
    transform:translateX(-100%);
    animation:shine 3s 2.5s infinite;
}
.btn-open:hover{ transform:translateY(-2px); box-shadow:0 8px 30px rgba(212,175,55,.4); }
.btn-open:active{ transform:scale(.97); }
.btn-open svg{ width:18px; height:18px; }

@keyframes shine{
    0%   { transform:translateX(-100%); }
    60%  { transform:translateX(100%); }
    100% { transform:translateX(100%); }
}
@keyframes fadeIn{ to{ opacity:1; } }
@keyframes fadeInScale{
    from{ opacity:0; transform:scale(.6); }
    to  { opacity:1; transform:scale(1); }
}

/* ============================================================
   INTRO CON EFECTO MÁQUINA DE ESCRIBIR
   ============================================================ */
#intro{
    position:fixed;
    inset:0;
    z-index:900;
    display:none;
    align-items:center;
    justify-content:center;
    background:
        radial-gradient(ellipse at center, rgba(122,11,11,.4), rgba(20,0,0,.98) 80%),
        #0f0000;
    color:var(--dorado-claro);
    padding:2rem;
    text-align:center;
    overflow:hidden;
}
#intro.activo{ display:flex; }

#intro::before{
    content:'';
    position:absolute;
    inset:0;
    background-image:
        radial-gradient(1.5px 1.5px at 20% 30%, rgba(212,175,55,.4), transparent),
        radial-gradient(1px 1px at 70% 60%, rgba(245,230,168,.3), transparent),
        radial-gradient(1.5px 1.5px at 40% 80%, rgba(212,175,55,.35), transparent),
        radial-gradient(1px 1px at 85% 20%, rgba(245,230,168,.25), transparent),
        radial-gradient(1px 1px at 10% 70%, rgba(212,175,55,.3), transparent);
    background-size:100% 100%;
    animation:twinkle 6s ease-in-out infinite;
    opacity:.6;
    pointer-events:none;
}
@keyframes twinkle{
    0%,100%{ opacity:.3; }
    50%    { opacity:.8; }
}

/* Mensaje con tipeo */
.intro-msg-wrap{
    position:relative;
    z-index:2;
    max-width:620px;
    padding:0 1rem;
    min-height:120px;
    display:flex;
    align-items:center;
    justify-content:center;
}

#introMsg{
    font-family:var(--f-serif);
    font-size:clamp(1.15rem, 4.5vw, 1.85rem);
    font-style:italic;
    line-height:1.7;
    color:var(--dorado-claro);
    white-space:pre-line;
    margin:0;
    text-align:center;
}

/* Cursor parpadeante al final del texto */
.cursor{
    display:inline-block;
    width:2px;
    height:1em;
    background:var(--dorado);
    margin-left:3px;
    vertical-align:middle;
    animation:blink 0.9s step-end infinite;
    box-shadow:0 0 8px rgba(212,175,55,.8);
}
@keyframes blink{
    0%,50%   { opacity:1; }
    51%,100% { opacity:0; }
}
/* Cursor oculto tras terminar de escribir */
.cursor.done{ animation:none; opacity:0; }

/* Clases tipográficas por mensaje */
#introMsg.msg-versiculo{
    font-style:italic;
    font-size:clamp(1.05rem, 4vw, 1.55rem);
    line-height:1.8;
}
#introMsg.msg-cita{
    font-family:var(--f-body);
    font-style:normal;
    font-size:clamp(.85rem, 3vw, 1.05rem);
    letter-spacing:.35em;
    text-transform:uppercase;
    color:var(--dorado);
    font-weight:500;
}
#introMsg.msg-saludo{
    font-family:var(--f-serif);
    font-style:normal;
    font-weight:600;
    letter-spacing:.15em;
    text-transform:uppercase;
    font-size:clamp(1.1rem, 4.5vw, 1.7rem);
    color:var(--dorado-brill);
}
#introMsg.msg-padres{
    font-family:var(--f-serif);
    font-style:normal;
    font-size:clamp(1rem, 4vw, 1.5rem);
    line-height:1.9;
}
#introMsg.msg-invita{
    font-style:italic;
    font-size:clamp(1.1rem, 4.5vw, 1.7rem);
}

.intro-progress{
    position:absolute;
    bottom:0; left:0;
    height:2px;
    background:linear-gradient(90deg, transparent, var(--dorado), transparent);
    width:0;
    transition:width .3s linear;
    z-index:3;
}

.btn-skip{
    position:absolute;
    top:20px; right:20px;
    z-index:4;
    padding:.6rem 1.1rem;
    background:rgba(0,0,0,.35);
    border:1px solid rgba(212,175,55,.4);
    border-radius:30px;
    color:rgba(245,230,168,.85);
    font-family:var(--f-body);
    font-size:.72rem;
    letter-spacing:.2em;
    text-transform:uppercase;
    cursor:pointer;
    backdrop-filter:blur(6px);
    -webkit-backdrop-filter:blur(6px);
    opacity:0;
    animation:fadeIn .6s 1.5s var(--ease-out) forwards;
    transition:background .25s, border-color .25s;
    -webkit-tap-highlight-color:transparent;
}
.btn-skip:hover{ background:rgba(212,175,55,.15); border-color:var(--dorado); }

/* ============================================================
   INVITACIÓN
   ============================================================ */
#invitacion{
    display:none;
    position:relative;
    background:var(--crema);
    min-height:100vh;
    min-height:100svh;
}
#invitacion.activa{ display:block; }

.reveal{
    opacity:0;
    transform:translateY(30px);
    transition:opacity .9s var(--ease-out), transform .9s var(--ease-out);
    will-change:opacity, transform;
}
.reveal.visible{ opacity:1; transform:translateY(0); will-change:auto; }

/* ============================================================
   HERO (foto circular)
   ============================================================ */
.hero{
    position:relative;
    min-height:100vh;
    min-height:100svh;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    padding:3rem 1.25rem;
    overflow:hidden;
    background:linear-gradient(180deg, var(--rojo-profundo), var(--rojo-oscuro));
    color:var(--dorado-claro);
}
.hero-bg{
    position:absolute;
    inset:0;
    background:
        radial-gradient(circle at 50% 30%, rgba(212,175,55,.15), transparent 60%),
        radial-gradient(circle at 50% 90%, rgba(122,11,11,.4), transparent 60%);
    pointer-events:none;
}
.hero-content{
    position:relative;
    z-index:2;
    max-width:500px;
    width:100%;
    display:flex;
    flex-direction:column;
    align-items:center;
    gap:1.5rem;
}
.hero-label{
    font-family:var(--f-serif);
    font-size:clamp(1rem, 3.2vw, 1.3rem);
    letter-spacing:.5em;
    text-transform:uppercase;
    color:var(--dorado);
    margin-bottom:.25rem;
}
.hero-title{
    font-family:var(--f-titulo);
    font-size:clamp(3.5rem, 16vw, 7rem);
    line-height:.95;
    background:linear-gradient(135deg, var(--dorado-brill), var(--dorado), var(--dorado-claro));
    -webkit-background-clip:text;
    background-clip:text;
    -webkit-text-fill-color:transparent;
    filter:drop-shadow(0 4px 20px rgba(212,175,55,.3));
}
.hero-photo{
    position:relative;
    width:clamp(200px, 60vw, 280px);
    aspect-ratio:1;
    margin:.5rem 0;
    padding:8px;
    border-radius:50%;
    background:conic-gradient(from 0deg,
        var(--dorado) 0deg, var(--dorado-brill) 90deg,
        var(--dorado) 180deg, var(--dorado-brill) 270deg, var(--dorado) 360deg);
    box-shadow:
        0 0 0 1px rgba(212,175,55,.4),
        0 20px 50px rgba(0,0,0,.5);
    animation:photoGlow 4s ease-in-out infinite;
}
.hero-photo::before{
    content:'';
    position:absolute;
    inset:-6px;
    border-radius:50%;
    border:1px dashed rgba(212,175,55,.35);
    animation:rotate 25s linear infinite;
}
.hero-photo img{
    width:100%; height:100%;
    border-radius:50%;
    object-fit:cover;
    border:3px solid var(--rojo-profundo);
}
@keyframes photoGlow{
    0%,100%{ box-shadow:0 0 0 1px rgba(212,175,55,.4), 0 20px 50px rgba(0,0,0,.5), 0 0 30px rgba(212,175,55,.15); }
    50%    { box-shadow:0 0 0 1px rgba(212,175,55,.7), 0 20px 50px rgba(0,0,0,.5), 0 0 50px rgba(212,175,55,.35); }
}
@keyframes rotate{ to{ transform:rotate(360deg); } }

.hero-name{
    font-family:var(--f-serif);
    font-size:clamp(1.4rem, 5.5vw, 2.2rem);
    font-weight:600;
    letter-spacing:.12em;
    color:var(--dorado-brill);
    text-transform:uppercase;
}
.hero-date-mini{
    display:flex;
    align-items:center;
    gap:.8rem;
    font-family:var(--f-body);
    font-size:.8rem;
    letter-spacing:.3em;
    text-transform:uppercase;
    color:var(--dorado);
    padding:.5rem 1.2rem;
    border-top:1px solid rgba(212,175,55,.3);
    border-bottom:1px solid rgba(212,175,55,.3);
}
.hero-date-mini svg{ width:14px; height:14px; stroke:var(--dorado); }

.scroll-indicator{
    position:absolute;
    bottom:25px;
    left:50%;
    transform:translateX(-50%);
    color:var(--dorado);
    opacity:.7;
    animation:floatDown 2.5s ease-in-out infinite;
}
.scroll-indicator svg{ width:22px; height:22px; }
@keyframes floatDown{
    0%,100%{ transform:translate(-50%, 0); opacity:.5; }
    50%    { transform:translate(-50%, 8px); opacity:1; }
}

/* ============================================================
   SECCIONES BASE
   ============================================================ */
.section{ padding:clamp(3.5rem, 9vw, 5.5rem) 1.25rem; position:relative; }
.container{ max-width:620px; margin:0 auto; text-align:center; }

.section-eyebrow{
    font-family:var(--f-body);
    font-size:.72rem;
    letter-spacing:.45em;
    text-transform:uppercase;
    color:var(--dorado);
    font-weight:500;
    margin-bottom:.8rem;
    display:block;
}

.section-title{
    font-family:var(--f-serif);
    font-size:clamp(1.5rem, 5vw, 2rem);
    font-weight:600;
    letter-spacing:.08em;
    margin-bottom:1.5rem;
    color:var(--rojo);
    position:relative;
    display:inline-block;
    line-height:1.3;
}
.section-title::after{
    content:'';
    display:block;
    width:60px; height:1.5px;
    background:linear-gradient(90deg, transparent, var(--dorado), transparent);
    margin:.85rem auto 0;
}

.section-divider{
    width:100%;
    display:flex;
    justify-content:center;
    margin:1.75rem 0;
    opacity:.7;
}
.section-divider svg{
    width:26px; height:26px;
    stroke:var(--dorado);
    fill:none;
}

/* ============================================================
   VERSÍCULO
   ============================================================ */
.versiculo{
    background:var(--crema);
    position:relative;
    padding:clamp(3rem, 8vw, 4.5rem) 1.25rem;
}
.versiculo::before{
    content:'';
    position:absolute;
    inset:0;
    background:
        radial-gradient(circle at 15% 15%, rgba(212,175,55,.06), transparent 45%),
        radial-gradient(circle at 85% 85%, rgba(212,175,55,.06), transparent 45%);
    pointer-events:none;
}
.versiculo-inner{
    position:relative;
    max-width:560px;
    margin:0 auto;
    text-align:center;
}
.versiculo-icon{
    width:38px; height:38px;
    margin:0 auto 1.5rem;
    stroke:var(--dorado);
    fill:none;
    opacity:.85;
}
.versiculo blockquote{
    font-family:var(--f-serif);
    font-style:italic;
    font-size:clamp(1.05rem, 3.8vw, 1.4rem);
    color:var(--rojo-oscuro);
    line-height:1.85;
    margin-bottom:1.5rem;
}
.versiculo cite{
    display:block;
    font-family:var(--f-body);
    font-style:normal;
    font-size:.72rem;
    letter-spacing:.4em;
    text-transform:uppercase;
    color:var(--dorado);
    font-weight:500;
}

/* ============================================================
   FAMILIA (padres + padrinos en una sola sección)
   ============================================================ */
.familia{
    background:
        radial-gradient(circle at 50% 0%, rgba(212,175,55,.12), transparent 50%),
        linear-gradient(180deg, var(--rojo-oscuro), var(--rojo-profundo));
    color:var(--crema);
    position:relative;
    overflow:hidden;
}
.familia::before,
.familia::after{
    content:'';
    position:absolute;
    width:200px; height:200px;
    border:1px solid rgba(212,175,55,.12);
    border-radius:50%;
    pointer-events:none;
}
.familia::before{ top:-80px; left:-80px; }
.familia::after{ bottom:-80px; right:-80px; }

.familia .section-eyebrow{ color:var(--dorado); }
.familia .section-title{ color:var(--dorado-claro); }
.familia .section-title::after{
    background:linear-gradient(90deg, transparent, var(--dorado-claro), transparent);
}

.familia-bloque{
    margin-bottom:2rem;
}
.familia-bloque:last-child{ margin-bottom:0; }

.nombres{
    display:flex;
    flex-direction:column;
    gap:.55rem;
    margin-top:.5rem;
}
.nombres p{
    font-family:var(--f-serif);
    font-size:clamp(1.05rem, 3.6vw, 1.25rem);
    letter-spacing:.04em;
    color:#fff;
    line-height:1.55;
}
.nombres .amp{
    font-family:var(--f-titulo);
    font-size:clamp(1.8rem, 5.5vw, 2.3rem);
    color:var(--dorado);
    line-height:1;
    margin:.15rem 0;
}
.nombres-padrinos p{
    font-size:clamp(1rem, 3.4vw, 1.15rem);
    line-height:1.7;
}

.divisor-icon{
    width:22px; height:22px;
    margin:2rem auto;
    stroke:var(--dorado);
    fill:none;
    opacity:.7;
    display:block;
}

/* ============================================================
   CONTADOR
   ============================================================ */
.contador-section{
    background:
        radial-gradient(circle at 50% 50%, rgba(212,175,55,.1), transparent 70%),
        linear-gradient(135deg, var(--rojo), var(--rojo-oscuro));
    color:var(--dorado-claro);
    padding:clamp(3.5rem, 9vw, 5rem) 1.25rem;
}
.contador-section .section-eyebrow{ color:var(--dorado-claro); }
.contador-section .section-title{ color:var(--dorado-claro); }
.contador-section .section-title::after{
    background:linear-gradient(90deg, transparent, var(--dorado-claro), transparent);
}
.contador{
    display:grid;
    grid-template-columns:repeat(4, 1fr);
    gap:.6rem;
    max-width:420px;
    margin:2rem auto 0;
}
.contador-item{
    background:rgba(0,0,0,.3);
    border:1px solid rgba(212,175,55,.4);
    border-radius:12px;
    padding:1rem .3rem;
    display:flex;
    flex-direction:column;
    align-items:center;
    gap:.3rem;
    backdrop-filter:blur(4px);
    -webkit-backdrop-filter:blur(4px);
}
.contador .num{
    font-family:var(--f-serif);
    font-size:clamp(1.6rem, 7vw, 2.4rem);
    font-weight:700;
    color:var(--dorado-brill);
    line-height:1;
    font-variant-numeric:tabular-nums;
}
.contador .lbl{
    font-size:.62rem;
    letter-spacing:.25em;
    text-transform:uppercase;
    opacity:.85;
    font-weight:500;
}

/* ============================================================
   EVENTO / DETALLES
   ============================================================ */
.evento{ background:var(--crema); }

.fecha-card{
    display:inline-flex;
    flex-direction:column;
    align-items:center;
    padding:1.5rem 2.5rem;
    border:1.5px solid var(--dorado);
    border-radius:16px;
    background:linear-gradient(135deg, #fff, var(--crema-osc));
    box-shadow:0 10px 30px rgba(122,11,11,.12);
    margin-bottom:2.5rem;
    position:relative;
}
.fecha-card::before,
.fecha-card::after{
    content:'';
    position:absolute;
    width:8px; height:8px;
    border:1px solid var(--dorado);
    transform:rotate(45deg);
}
.fecha-card::before{ top:-5px; left:50%; margin-left:-4px; background:var(--crema); }
.fecha-card::after { bottom:-5px; left:50%; margin-left:-4px; background:var(--crema); }

.fecha-mes{
    font-family:var(--f-body);
    font-size:.75rem;
    letter-spacing:.45em;
    text-transform:uppercase;
    color:var(--rojo);
    font-weight:600;
}
.fecha-dia{
    font-family:var(--f-serif);
    font-size:clamp(2.8rem, 10vw, 4rem);
    font-weight:700;
    color:var(--rojo);
    line-height:1;
    margin:.3rem 0;
}
.fecha-anio{
    font-family:var(--f-body);
    font-size:.8rem;
    letter-spacing:.4em;
    color:var(--dorado);
    font-weight:500;
}

.eventos-grid{
    display:flex;
    flex-direction:column;
    gap:.85rem;
    margin-top:1rem;
}
.evento-item{
    display:flex;
    align-items:center;
    gap:1rem;
    padding:1.15rem 1.35rem;
    background:#fff;
    border:1px solid rgba(212,175,55,.25);
    border-radius:14px;
    text-align:left;
    box-shadow:0 4px 15px rgba(122,11,11,.05);
    transition:transform .3s var(--ease-out), box-shadow .3s var(--ease-out);
}
.evento-item:active{ transform:scale(.98); }

.evento-icon-wrap{
    flex-shrink:0;
    width:46px; height:46px;
    border-radius:50%;
    background:linear-gradient(135deg, var(--rojo), var(--rojo-oscuro));
    border:1px solid var(--dorado);
    display:flex;
    align-items:center;
    justify-content:center;
    box-shadow:0 3px 10px rgba(122,11,11,.2);
}
.evento-icon-wrap svg{
    width:20px; height:20px;
    stroke:var(--dorado-claro);
    fill:none;
    stroke-width:1.8;
}
.evento-info{ flex:1; min-width:0; }
.evento-info h3{
    font-family:var(--f-serif);
    font-size:1.05rem;
    font-weight:600;
    color:var(--rojo);
    margin-bottom:.1rem;
    letter-spacing:.04em;
}
.evento-info p{
    font-size:.83rem;
    color:var(--texto-suave);
    line-height:1.5;
}
.evento-info .hora{
    color:var(--dorado);
    font-weight:600;
    font-size:.76rem;
    letter-spacing:.08em;
}

/* ============================================================
   ACCIONES
   ============================================================ */
.acciones{
    background:linear-gradient(180deg, var(--crema), var(--crema-osc));
    padding:clamp(3rem, 8vw, 4.5rem) 1.25rem;
}
.acciones .container{
    display:flex;
    flex-direction:column;
    gap:.9rem;
    max-width:380px;
}
.btn-cta{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:.7rem;
    padding:1.1rem 1.5rem;
    border-radius:50px;
    font-family:var(--f-body);
    font-size:.85rem;
    font-weight:600;
    letter-spacing:.2em;
    text-transform:uppercase;
    text-decoration:none;
    cursor:pointer;
    border:1.5px solid transparent;
    transition:transform .25s var(--ease-out), box-shadow .25s var(--ease-out), background .25s;
    -webkit-tap-highlight-color:transparent;
}
.btn-cta svg{ width:18px; height:18px; flex-shrink:0; }
.btn-cta:active{ transform:scale(.97); }
.btn-cta.primary{
    background:linear-gradient(135deg, var(--rojo), var(--rojo-oscuro));
    color:var(--dorado-brill);
    border-color:var(--dorado);
    box-shadow:0 8px 25px rgba(122,11,11,.35);
}
.btn-cta.primary svg{ stroke:var(--dorado-brill); }
.btn-cta.primary:hover{ transform:translateY(-2px); box-shadow:0 12px 35px rgba(122,11,11,.45); }
.btn-cta.secondary{
    background:transparent;
    color:var(--rojo);
    border-color:var(--rojo);
}
.btn-cta.secondary svg{ stroke:var(--rojo); }
.btn-cta.secondary:hover{ background:var(--rojo); color:var(--dorado-brill); }
.btn-cta.secondary:hover svg{ stroke:var(--dorado-brill); }

/* ============================================================
   MENSAJE FINAL
   ============================================================ */
.mensaje-final{
    background:
        radial-gradient(circle at 50% 50%, rgba(212,175,55,.1), transparent 70%),
        linear-gradient(180deg, var(--rojo-oscuro), var(--rojo-profundo));
    color:var(--dorado-claro);
    text-align:center;
    padding:4rem 1.5rem 3rem;
    position:relative;
    overflow:hidden;
}
.mensaje-final-icon{
    width:36px; height:36px;
    margin:0 auto 1.75rem;
    stroke:var(--dorado);
    fill:none;
    opacity:.85;
}
.mensaje-final p{
    font-family:var(--f-serif);
    font-style:italic;
    font-size:clamp(1.1rem, 4vw, 1.4rem);
    line-height:1.75;
    max-width:480px;
    margin:0 auto 2rem;
    color:var(--crema);
}
.mensaje-final .firma{
    font-family:var(--f-titulo);
    font-size:clamp(2rem, 7vw, 2.8rem);
    color:var(--dorado-brill);
    margin-bottom:.6rem;
    font-style:normal;
}
.mensaje-final .fecha-firma{
    font-size:.72rem;
    letter-spacing:.5em;
    text-transform:uppercase;
    color:var(--dorado);
    opacity:.85;
}

/* Botón música */
.btn-music{
    position:fixed;
    bottom:18px;
    right:18px;
    z-index:200;
    width:48px; height:48px;
    border-radius:50%;
    background:linear-gradient(135deg, var(--rojo), var(--rojo-oscuro));
    border:1.5px solid var(--dorado);
    display:flex;
    align-items:center;
    justify-content:center;
    cursor:pointer;
    box-shadow:0 6px 20px rgba(0,0,0,.3);
    transition:transform .25s var(--ease-out);
    -webkit-tap-highlight-color:transparent;
}
.btn-music svg{
    width:18px; height:18px;
    stroke:var(--dorado-claro);
    fill:none;
    stroke-width:2;
}
.btn-music:active{ transform:scale(.92); }
.btn-music.playing svg{ animation:pulse 1.5s ease-in-out infinite; }
@keyframes pulse{
    0%,100%{ transform:scale(1); opacity:1; }
    50%    { transform:scale(1.15); opacity:.7; }
}

/* ============================================================
   RESPONSIVE
   ============================================================ */
@media (max-width:400px){
    .contador{ gap:.4rem; }
    .contador-item{ padding:.85rem .2rem; }
    .contador .lbl{ font-size:.55rem; letter-spacing:.18em; }
    .btn-cta{ font-size:.78rem; padding:.95rem 1.2rem; }
    .evento-item{ padding:1rem 1rem; gap:.8rem; }
    .evento-icon-wrap{ width:40px; height:40px; }
    .evento-icon-wrap svg{ width:18px; height:18px; }
    .fecha-card{ padding:1.2rem 1.8rem; }
}
@media (max-height:500px) and (orientation:landscape){
    .hero{ padding:2rem 1rem; }
    .hero-photo{ width:140px; }
    .hero-title{ font-size:3.5rem; }
}
@media (prefers-reduced-motion: reduce){
    *,*::before,*::after{
        animation-duration:.01ms !important;
        animation-iteration-count:1 !important;
        transition-duration:.01ms !important;
        scroll-behavior:auto !important;
    }
    .reveal{ opacity:1; transform:none; }
    .cursor{ display:none; }
}
</style>
</head>
<body class="intro-lock">

<!-- ============================================================
     PORTADA
     ============================================================ -->
<div id="cover">
    <svg class="cover-ornament" viewBox="0 0 60 60" fill="none" stroke="currentColor" stroke-width="1.2">
        <path d="M30 5 L35 25 L55 30 L35 35 L30 55 L25 35 L5 30 L25 25 Z" fill="none" stroke="#d4af37" opacity=".9"/>
        <circle cx="30" cy="30" r="3" fill="#f5e6a8" stroke="none"/>
    </svg>

    <p class="cover-title">Estás invitado a</p>
    <h1 class="cover-name">Mis XV Años</h1>
    <p class="cover-sub"><?= htmlspecialchars($CONFIG['nombre']) ?></p>

    <button class="btn-open" id="btnOpen" aria-label="Abrir invitación">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
            <path d="M5 12h14M13 6l6 6-6 6"/>
        </svg>
        Abrir invitación
    </button>
</div>

<!-- ============================================================
     INTRO
     ============================================================ -->
<div id="intro" role="dialog" aria-label="Introducción">
    <button class="btn-skip" id="btnSkip" aria-label="Saltar introducción">Saltar</button>
    <div class="intro-msg-wrap">
        <p id="introMsg"></p>
    </div>
    <div class="intro-progress" id="introProgress"></div>
</div>

<!-- ============================================================
     INVITACIÓN
     ============================================================ -->
<main id="invitacion">

    <!-- HERO -->
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-content">
            <p class="hero-label reveal">Mis</p>
            <h1 class="hero-title reveal" data-delay="200">XV Años</h1>

            <div class="hero-photo reveal" data-delay="400">
                <img src="<?= htmlspecialchars($CONFIG['foto']) ?>"
                     alt="<?= htmlspecialchars($CONFIG['nombre']) ?>"
                     width="280" height="280"
                     fetchpriority="high">
            </div>

            <p class="hero-name reveal" data-delay="600"><?= htmlspecialchars($CONFIG['nombre']) ?></p>

            <div class="hero-date-mini reveal" data-delay="800">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round">
                    <rect x="3" y="4" width="18" height="18" rx="2"/>
                    <path d="M16 2v4M8 2v4M3 10h18"/>
                </svg>
                22 · DIC · 2026
            </div>
        </div>

        <div class="scroll-indicator" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                <path d="M12 5v14M5 12l7 7 7-7"/>
            </svg>
        </div>
    </section>

    <!-- VERSÍCULO -->
    <section class="versiculo">
        <div class="versiculo-inner">
            <svg class="versiculo-icon reveal" viewBox="0 0 24 24" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2v20M8 8h8M5 5l14 14M19 5L5 19" opacity=".3"/>
                <circle cx="12" cy="12" r="9"/>
            </svg>
            <blockquote class="reveal" data-delay="150">
                «Te alabaré; porque formidables, maravillosas son tus obras; estoy maravillado, y mi alma lo sabe muy bien.»
            </blockquote>
            <cite class="reveal" data-delay="350">Salmo 139:14</cite>
        </div>
    </section>

    <!-- FAMILIA -->
    <section class="section familia">
        <div class="container">

            <div class="familia-bloque reveal">
                <span class="section-eyebrow">Con la bendición de</span>
                <h2 class="section-title">Mis padres</h2>
                <div class="nombres">
                    <p>Analy Lozano Sandoval</p>
                    <p class="amp">&</p>
                    <p>Deol Ignacio Payán Payán</p>
                </div>
            </div>

            <svg class="divisor-icon reveal" data-delay="250" viewBox="0 0 24 24" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2l2.4 8.4L22 12l-7.6 1.6L12 22l-2.4-8.4L2 12l7.6-1.6z"/>
            </svg>

            <div class="familia-bloque reveal" data-delay="400">
                <span class="section-eyebrow">Mis</span>
                <h2 class="section-title">Padrinos de honor</h2>
                <div class="nombres nombres-padrinos">
                    <p>Matilde Armendáriz Peña <span class="amp" style="display:inline; font-size:.85em; margin:0 .15em;">&</span> Edin Elizondo Villalobos</p>
                    <p>Alicia Campuzano de Moreno <span class="amp" style="display:inline; font-size:.85em; margin:0 .15em;">&</span> Severo Moreno Loera</p>
                </div>
            </div>

        </div>
    </section>

    <!-- CONTADOR -->
    <section class="contador-section">
        <div class="container">
            <span class="section-eyebrow reveal">Cuenta regresiva</span>
            <h2 class="section-title reveal" data-delay="100">Faltan</h2>
            <div class="contador reveal" data-delay="200" id="contador" data-fecha="<?= htmlspecialchars($CONFIG['fecha']) ?>">
                <div class="contador-item"><span class="num" data-unit="dias">00</span><span class="lbl">Días</span></div>
                <div class="contador-item"><span class="num" data-unit="horas">00</span><span class="lbl">Horas</span></div>
                <div class="contador-item"><span class="num" data-unit="min">00</span><span class="lbl">Min</span></div>
                <div class="contador-item"><span class="num" data-unit="seg">00</span><span class="lbl">Seg</span></div>
            </div>
        </div>
    </section>

    <!-- EVENTO -->
    <section class="section evento">
        <div class="container">
            <span class="section-eyebrow reveal">Reserva la fecha</span>
            <div class="fecha-card reveal" data-delay="100">
                <span class="fecha-mes">Diciembre</span>
                <span class="fecha-dia">22</span>
                <span class="fecha-anio">2026</span>
            </div>

            <div class="eventos-grid">
                <div class="evento-item reveal" data-delay="150">
                    <div class="evento-icon-wrap">
                        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v20M8 6h8M8 18h8M10 2h4v4h-4z"/>
                        </svg>
                    </div>
                    <div class="evento-info">
                        <h3>Misa</h3>
                        <p><span class="hora">6:30 p.m.</span><br>Capilla de la Virgen de Guadalupe</p>
                    </div>
                </div>

                <div class="evento-item reveal" data-delay="250">
                    <div class="evento-icon-wrap">
                        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 21h18M5 21V8l7-5 7 5v13M9 21v-6h6v6"/>
                        </svg>
                    </div>
                    <div class="evento-info">
                        <h3>Recepción</h3>
                        <p>Auditorio Municipal de Balleza</p>
                    </div>
                </div>

                <div class="evento-item reveal" data-delay="350">
                    <div class="evento-icon-wrap">
                        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 3v7a3 3 0 003 3v8M7 3v7M10 3v7M17 3c-1.5 2-1.5 5 0 7v11"/>
                        </svg>
                    </div>
                    <div class="evento-info">
                        <h3>Cena</h3>
                        <p><span class="hora">8:00 p.m.</span></p>
                    </div>
                </div>

                <div class="evento-item reveal" data-delay="450">
                    <div class="evento-icon-wrap">
                        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 18V5l12-2v13"/>
                            <circle cx="6" cy="18" r="3"/>
                            <circle cx="18" cy="16" r="3"/>
                        </svg>
                    </div>
                    <div class="evento-info">
                        <h3>Baile</h3>
                        <p><span class="hora">9:00 p.m.</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ACCIONES -->
    <section class="acciones">
        <div class="container">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSffTtM-f9zj_dTkmfZ-uhXw6Q6lyuiKG2KeiZ5VHDZsI2tHvQ/viewform?usp=publish-editor"
               target="_blank" rel="noopener noreferrer"
               class="btn-cta primary reveal">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 11l3 3L22 4"/>
                    <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>
                </svg>
                Confirmar asistencia
            </a>

            <a href="<?= htmlspecialchars($CONFIG['mapa']) ?>"
               target="_blank" rel="noopener noreferrer"
               class="btn-cta secondary reveal" data-delay="150">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                    <circle cx="12" cy="10" r="3"/>
                </svg>
                Ver ubicación
            </a>
        </div>
    </section>

    <!-- MENSAJE FINAL -->
    <footer class="mensaje-final">
        <svg class="mensaje-final-icon reveal" viewBox="0 0 24 24" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 21s-8-5-8-12a4 4 0 018-1 4 4 0 018 1c0 7-8 12-8 12z"/>
        </svg>
        <p class="reveal" data-delay="150">
            Tu presencia es mi mejor regalo.<br>
            Te espero con mucha ilusión.
        </p>
        <p class="firma reveal" data-delay="300"><?= htmlspecialchars($CONFIG['nombre']) ?></p>
        <p class="fecha-firma reveal" data-delay="450">22 · Diciembre · 2026</p>
    </footer>
</main>

<!-- Música -->
<button class="btn-music" id="btnMusic" aria-label="Reproducir música" title="Música">
    <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
        <path d="M9 18V5l12-2v13"/>
        <circle cx="6" cy="18" r="3"/>
        <circle cx="18" cy="16" r="3"/>
    </svg>
</button>
<audio id="audio" loop preload="none">
    <source src="atlasaudio-soft-piano-631951.mp3" type="audio/mpeg">
</audio>

<script>
(function () {
    'use strict';

    /* ============================================================
       MENSAJES DE LA INTRO (efecto máquina de escribir)
       ============================================================ */
    var MENSAJES = [
        {
            texto: 'Te alabaré; porque formidables, maravillosas son tus obras; estoy maravillado, y mi alma lo sabe muy bien.',
            clase: 'msg-versiculo',
            velocidad: 45    // ms por letra (más lento para mensaje largo)
        },
        {
            texto: 'Salmo 139:14',
            clase: 'msg-cita',
            velocidad: 90    // más lento, enfático
        },
        {
            texto: 'Hola, soy Deirany Guadalupe',
            clase: 'msg-saludo',
            velocidad: 65
        },
        {
            texto: 'Con la bendición de mis padres\n\nAnaly Lozano Sandoval\n&\nDeol Ignacio Payán Payán',
            clase: 'msg-padres',
            velocidad: 40
        },
        {
            texto: 'Me complace invitarte a mis XV Años',
            clase: 'msg-invita',
            velocidad: 55
        }
    ];

    var PAUSA_TRAS_TEXTO = 1800;  // ms antes de borrar tras terminar de escribir
    var VELOCIDAD_BORRADO = 25;   // ms por letra al borrar
    var PAUSA_ENTRE_MENSAJES = 400; // ms en blanco entre mensajes

    /* ============================================================
       REFERENCIAS
       ============================================================ */
    var body        = document.body;
    var cover       = document.getElementById('cover');
    var btnOpen     = document.getElementById('btnOpen');
    var intro       = document.getElementById('intro');
    var introMsg    = document.getElementById('introMsg');
    var introProg   = document.getElementById('introProgress');
    var btnSkip     = document.getElementById('btnSkip');
    var invitacion  = document.getElementById('invitacion');
    var btnMusic    = document.getElementById('btnMusic');
    var audio       = document.getElementById('audio');

    var introActiva = false;
    var typingTimer = null;
    var cursorEl    = null;

    /* ============================================================
       ABRIR
       ============================================================ */
    btnOpen.addEventListener('click', function () {
        cover.classList.add('oculto');
        setTimeout(function(){ cover.style.display = 'none'; }, 1000);

        var source = audio.querySelector('source');
        if (source && source.src) {
            audio.volume = 0.4;
            audio.play().then(function(){
                btnMusic.classList.add('playing');
            }).catch(function(){});
        }

        setTimeout(iniciarIntro, 800);
    });

    /* ============================================================
       CURSOR PARPADEANTE
       ============================================================ */
    function crearCursor() {
        var c = document.createElement('span');
        c.className = 'cursor';
        return c;
    }

    /* ============================================================
       INTRO — TIPEO + BORRADO
       ============================================================ */
    function iniciarIntro() {
        introActiva = true;
        intro.classList.add('activo');
        var idx = 0;

        // Añadir cursor al inicio
        cursorEl = crearCursor();
        introMsg.textContent = '';
        introMsg.appendChild(cursorEl);

        function tipearMensaje() {
            if (!introActiva || idx >= MENSAJES.length) {
                terminarIntro();
                return;
            }

            var msg = MENSAJES[idx];
            introMsg.className = msg.clase || '';

            // Progreso
            introProg.style.width = ((idx + 1) / MENSAJES.length * 100) + '%';

            // Limpiar texto pero mantener cursor
            introMsg.textContent = '';
            introMsg.appendChild(cursorEl);
            cursorEl.classList.remove('done');

            // Tipear letra por letra
            var texto = msg.texto;
            var i = 0;

            function tipearLetra() {
                if (!introActiva) return;

                if (i < texto.length) {
                    // Insertar texto antes del cursor
                    var nodoTexto = cursorEl.previousSibling;
                    if (nodoTexto && nodoTexto.nodeType === 3) {
                        nodoTexto.nodeValue += texto.charAt(i);
                    } else {
                        var t = document.createTextNode(texto.charAt(i));
                        introMsg.insertBefore(t, cursorEl);
                    }
                    i++;

                    // Pausa extra tras saltos de línea o puntos
                    var char = texto.charAt(i - 1);
                    var delay = msg.velocidad;
                    if (char === '.' || char === ',' || char === '\n') delay += 300;
                    if (char === '\n') delay += 200;

                    typingTimer = setTimeout(tipearLetra, delay);
                } else {
                    // Terminó de escribir → ocultar cursor y esperar
                    cursorEl.classList.add('done');
                    typingTimer = setTimeout(borrarMensaje, PAUSA_TRAS_TEXTO);
                }
            }

            function borrarMensaje() {
                if (!introActiva) return;

                cursorEl.classList.remove('done');

                function borrarLetra() {
                    if (!introActiva) return;

                    var nodoTexto = cursorEl.previousSibling;
                    if (nodoTexto && nodoTexto.nodeType === 3 && nodoTexto.nodeValue.length > 0) {
                        nodoTexto.nodeValue = nodoTexto.nodeValue.slice(0, -1);
                        typingTimer = setTimeout(borrarLetra, VELOCIDAD_BORRADO);
                    } else {
                        // Mensaje vacío → siguiente
                        idx++;
                        typingTimer = setTimeout(tipearMensaje, PAUSA_ENTRE_MENSAJES);
                    }
                }
                borrarLetra();
            }

            tipearLetra();
        }

        tipearMensaje();
    }

    function terminarIntro() {
        introActiva = false;
        if (typingTimer) clearTimeout(typingTimer);

        intro.style.transition = 'opacity .8s ease';
        intro.style.opacity = '0';

        setTimeout(function () {
            intro.classList.remove('activo');
            intro.style.display = 'none';
            body.classList.remove('intro-lock');

            invitacion.classList.add('activa');
            window.scrollTo(0, 0);

            initReveals();
            initContador();
        }, 800);
    }

    btnSkip.addEventListener('click', terminarIntro);

    /* ============================================================
       REVEALS
       ============================================================ */
    function initReveals() {
        var els = document.querySelectorAll('.reveal');
        if (!('IntersectionObserver' in window)) {
            els.forEach(function (el) { el.classList.add('visible'); });
            return;
        }
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var delay = parseInt(entry.target.dataset.delay || '0', 10);
                    setTimeout(function () {
                        entry.target.classList.add('visible');
                    }, delay);
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        els.forEach(function (el) { io.observe(el); });
    }

    /* ============================================================
       CONTADOR
       ============================================================ */
    function initContador() {
        var cont = document.getElementById('contador');
        if (!cont) return;
        var target = new Date(cont.dataset.fecha).getTime();
        if (isNaN(target)) return;

        var elDias  = cont.querySelector('[data-unit="dias"]');
        var elHoras = cont.querySelector('[data-unit="horas"]');
        var elMin   = cont.querySelector('[data-unit="min"]');
        var elSeg   = cont.querySelector('[data-unit="seg"]');

        function pad(n) { return String(n).padStart(2, '0'); }

        function tick() {
            var diff = target - Date.now();
            if (diff <= 0) {
                elDias.textContent = '00';
                elHoras.textContent = '00';
                elMin.textContent = '00';
                elSeg.textContent = '00';
                return;
            }
            var s = Math.floor(diff / 1000);
            elDias.textContent  = pad(Math.floor(s / 86400));
            elHoras.textContent = pad(Math.floor((s % 86400) / 3600));
            elMin.textContent   = pad(Math.floor((s % 3600) / 60));
            elSeg.textContent   = pad(s % 60);
        }
        tick();
        setInterval(tick, 1000);
        document.addEventListener('visibilitychange', function () {
            if (!document.hidden) tick();
        });
    }

    /* ============================================================
       MÚSICA
       ============================================================ */
    btnMusic.addEventListener('click', function () {
        var source = audio.querySelector('source');
        if (!source || !source.src) return;
        if (audio.paused) {
            audio.volume = 0.4;
            audio.play().then(function(){
                btnMusic.classList.add('playing');
                btnMusic.setAttribute('aria-label', 'Pausar música');
            }).catch(function(){});
        } else {
            audio.pause();
            btnMusic.classList.remove('playing');
            btnMusic.setAttribute('aria-label', 'Reproducir música');
        }
    });

})();
</script>
</body>
</html>