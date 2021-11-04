<?php

namespace App\Controller\Admin;

use App\Entity\Apprenant;
use App\Entity\Users;
use App\Entity\Postes;
use App\Entity\Pays;
use App\Entity\NiveauEnseignement;
use App\Entity\Enseigner;
use App\Entity\Participation;
use App\Entity\Profession;
use App\Entity\Reunion;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use PhpParser\Node\Expr\Yield_;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Security\Core\User\UserInterface;


class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin_dashboard")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Gestion Poste Temoin')
            ;
    }


    public function configureMenuItems(): iterable
    {

            yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');

            yield MenuItem::linkToCrud('Témoin', 'fas fa-user', Users::class);

            yield MenuItem::linkToCrud('Apprenant', 'fas fa-user', Apprenant::class);

            yield MenuItem::linkToCrud('Profession', 'fas fa-user-md', Profession::class);
            
            yield MenuItem::linkToCrud('Postes', 'fas fa-graduation-cap', Postes::class);

            yield MenuItem::linkToCrud('Pays', 'fas fa-flag', Pays::class);

            yield MenuItem::linkToCrud('Niveaux', 'fas fa-layer-group', NiveauEnseignement::class);

            Yield MenuItem::linkToCrud('Rotation','fas fa-person-booth',Enseigner::class);

            Yield MenuItem::linkToCrud('Réunion','fas fa-university',Reunion::class);

            Yield MenuItem::linkToCrud('Participation','fas fa-church',Participation::class);

            Yield MenuItem::linkToLogout('Déconnexion', 'fas fa-sign-out-alt');
        


    }

    // public function configureUserMenu(UserInterface $user): UserMenu
    // {
    //     return parent::configureUserMenu($user)
    //         // use the given $user object to get the user name
    //         ->setName('$user->getFullName()')
    //         // use this method if you don't want to display the name of the user
    //         ->displayUserName(false)

    //         // you can return an URL with the avatar image
    //         ->setAvatarUrl('https://...')
    //         ->setAvatarUrl('$user->getProfileImageUrl()')
    //         // use this method if you don't want to display the user image
    //         ->displayUserAvatar(false)
    //         // you can also pass an email address to use gravatar's service
    //         ->setGravatarEmail('$user->getMainEmailAddress()')
    //         ;

    // }
}
